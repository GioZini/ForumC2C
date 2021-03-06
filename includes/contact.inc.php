<?php
if (!defined('IN_INDEX')) {
	header('Location: ../index.php');
	exit;
}

if (empty($_SESSION[$settings['session_prefix'].'user_id']) && $settings['captcha_email'] > 0) {
	require('modules/captcha/captcha.php');
	$captcha = new Captcha();
}

if (isset($_REQUEST['action'])) 
	$action = $_REQUEST['action'];
else 
	$action = 'main';

if(isset($_POST['message_submit'])) 
	$action = 'message_submit';

$isUser = isset($_SESSION[$settings['session_prefix'].'user_type']) && isset($_SESSION[$settings['session_prefix'].'user_id']);
$isModOrAdmin = $isUser && ($_SESSION[$settings['session_prefix'].'user_type'] == 1 || $_SESSION[$settings['session_prefix'].'user_type'] == 2);

switch($action) {
	case 'main':
		// set timestamp for SPAM protection
		setReceiptTimestamp();
		
		// sender id
		$smarty->assign('user_id', isset($_SESSION[$settings['session_prefix'].'user_id']) ? intval($_SESSION[$settings['session_prefix'].'user_id']) : FALSE);

		if (isset($_REQUEST['id'])) {
			// contact by entry:
			$result = @mysqli_query($connid, "SELECT user_id AS recipient_user_id, name, email FROM ".$db_settings['forum_table']." WHERE id = ".intval($_REQUEST['id'])." LIMIT 1") or raise_error('database_error', mysqli_error($connid));
			if (mysqli_num_rows($result) != 1) {
				header('Location: index.php');
				exit;
			}
			$data = mysqli_fetch_array($result);
			mysqli_free_result($result);
			if ($data['recipient_user_id'] > 0) {
				// registered user, get  data from userdata table:
				$result = @mysqli_query($connid, "SELECT user_name, email_contact FROM ".$db_settings['userdata_table']." WHERE user_id = ".intval($data['recipient_user_id'])." LIMIT 1") or raise_error('database_error', mysqli_error($connid));
				$userdata = mysqli_fetch_array($result);
				mysqli_free_result($result);
				if ($isModOrAdmin || $isUser && $userdata['email_contact'] > 0 || $userdata['email_contact'] == 2) {
					$smarty->assign('recipient_name', htmlspecialchars($userdata['user_name']));
					$smarty->assign('recipient_user_id', intval($data['recipient_user_id']));
				} else {
					$smarty->assign('error_message', 'impossible_to_contact');
				}
			} else {
				// not registered user, get data from forum table:
				if($data['email'] == '') {
					$smarty->assign('error_message','impossible_to_contact');
				} else {
					$smarty->assign('recipient_name', htmlspecialchars($data['name']));
					$smarty->assign('id', intval($_REQUEST['id']));
				}
			}
		} elseif (isset($_REQUEST['recipient_user_id'])) {
			$result = @mysqli_query($connid, "SELECT user_name, email_contact FROM ".$db_settings['userdata_table']." WHERE user_id = '".intval($_REQUEST['recipient_user_id'])."' LIMIT 1") or raise_error('database_error', mysqli_error($connid));
			if(mysqli_num_rows($result) != 1) {
				header('Location: index.php');
				exit;
			}
			$userdata = mysqli_fetch_array($result);
			mysqli_free_result($result);
			if ($isModOrAdmin || $isUser && $userdata['email_contact'] > 0 || $userdata['email_contact'] == 2) {
				$smarty->assign('recipient_name', htmlspecialchars($userdata['user_name']));
				$smarty->assign('recipient_user_id', intval($_REQUEST['recipient_user_id']));
			} else {
				$smarty->assign('error_message', 'impossible_to_contact');
			}
		}
	break;
	case 'message_submit':
		if (isset($_POST['id'])) 
			$id = intval($_POST['id']);
		if (isset($_POST['recipient_user_id'])) 
			$recipient_user_id = intval($_POST['recipient_user_id']);
		if (isset($_POST['text']) && !empty($_POST['text']))
			$text = trim($_POST['text']);
		if (isset($_POST['subject']) && !empty($_POST['subject']))
			$subject = trim($_POST['subject']);
		if (isset($_SESSION[$settings['session_prefix'].'user_id'])) {
			$result = @mysqli_query($connid, "SELECT user_email FROM ".$db_settings['userdata_table']." WHERE user_id = '".intval($_SESSION[$settings['session_prefix'].'user_id'])."' LIMIT 1") or raise_error('database_error', mysqli_error($connid));
			$data = mysqli_fetch_array($result);
			mysqli_free_result($result);
			$sender_email = $data['user_email']; // email of reg. user taken from profil
			$confirmation_mail_to_sender = isset($_POST['confirmation_email']) && intval($_POST['confirmation_email']) == 1 ? TRUE : FALSE;
		}
		else {
			$sender_email = $_POST['sender_email'];
			$confirmation_mail_to_sender = FALSE;
		}
		$sender_email = trim(preg_replace("/\r/", "", $sender_email));

		// check form session and time used to complete the form:
		setReceiptTimestamp();
		// if (empty($_SESSION[$settings['session_prefix'].'user_id'])) {
		if (!isset($_SESSION[$settings['session_prefix'] . 'receipt_timestamp_difference']) || intval($_SESSION[$settings['session_prefix'] . 'receipt_timestamp_difference']) <= 0)
			$errors[] = 'error_invalid_form';
		else {
			if ($_SESSION[$settings['session_prefix'] . 'receipt_timestamp_difference'] < $settings['min_email_time'])
				$errors[] = 'error_form_sent_too_fast';
			elseif ($_SESSION[$settings['session_prefix'] . 'receipt_timestamp_difference'] > $settings['max_email_time'])
				$errors[] = 'error_form_sent_too_slow';
		}

		if (empty($errors)) {
			if (empty($sender_email) || $sender_email == '') 
				$errors[] = 'error_message_no_email';
			elseif (!is_valid_email($sender_email)) 
				$errors[] = 'error_email_invalid';
			if (empty($subject) || $subject == '') 
				$errors[] = 'error_message_no_subject';
			if (empty($text) || $text == '') 
				$errors[] = 'error_message_no_text';
			if (my_strlen($subject, $lang['charset']) > $settings['email_subject_maxlength']) 
				$errors[] = 'error_email_subject_too_long';
			if (my_strlen($text, $lang['charset']) > $settings['email_text_maxlength']) 
				$errors[] = 'error_email_text_too_long';
			$smarty->assign('text_length', my_strlen($text,$lang['charset']));
		}

		if (empty($errors)) {
			// check for not accepted words:
			$joined_mail = my_strtolower($sender_email.' '.$subject.' '.$text, $lang['charset']);
			$not_accepted_words = get_not_accepted_words($joined_mail);
			if ($not_accepted_words != false) {
				$not_accepted_words_listing = implode(', ',$not_accepted_words);
				if (count($not_accepted_words) == 1) {
					$smarty->assign('not_accepted_word', htmlspecialchars($not_accepted_words_listing));
					$errors[] = 'error_not_accepted_word';
				} else {
					$smarty->assign('not_accepted_words', htmlspecialchars($not_accepted_words_listing));
					$errors[] = 'error_not_accepted_words';
				}
			}
		}

		// CAPTCHA check:
		if (empty($errors) && empty($_SESSION[$settings['session_prefix'].'user_id']) && $settings['captcha_email'] > 0) {
			if ($settings['captcha_email'] == 2) {
			if (empty($_SESSION['captcha_session']) || empty($_POST['captcha_code']) || $captcha->check_captcha($_SESSION['captcha_session'], $_POST['captcha_code']) != true) $errors[] = 'captcha_check_failed';
			} else {
				if (empty($_SESSION['captcha_session']) || empty($_POST['captcha_code']) || $captcha->check_math_captcha($_SESSION['captcha_session'][2], $_POST['captcha_code']) != true) $errors[] = 'captcha_check_failed';
			}
			unset($_SESSION['captcha_session']);
		}

		// Spam check: 
		if (empty($errors) && (empty($_SESSION[$settings['session_prefix'].'user_id']) || isset($_SESSION[$settings['session_prefix'].'user_type']) && $_SESSION[$settings['session_prefix'].'user_type'] == 0 && $settings['spam_check_registered'] == 1)) {
			$mail_parts = explode("@", $sender_email);
			$sender_name = $mail_parts[0];
			$check_mail['author'] = $mail_parts[0];
			$check_mail['email'] = $sender_email;
			$check_mail['body'] = $text;
				
			// Akismet spam check: 
			if ($settings['akismet_key'] != '' && $settings['akismet_mail_check'] == 1) {
				require('modules/akismet/akismet.class.php');
				$akismet = new Akismet($settings['forum_address'], $settings['akismet_key'], $check_mail);
				// test for errors
				if ($akismet->errorsExist()) {
					// returns true if any errors exist
					if ($akismet->isError(AKISMET_INVALID_KEY)) {
						$errors[] = 'error_akismet_api_key';
					} elseif ($akismet->isError(AKISMET_RESPONSE_FAILED)) {
						$errors[] = 'error_akismet_connection';
					} elseif($akismet->isError(AKISMET_SERVER_NOT_FOUND)) {
						$errors[] = 'error_akismet_connection';
					}
				} else {
					// No errors, check for spam
					if ($akismet->isSpam()) {
						$errors[] = 'error_email_spam_suspicion';
					}
				}
			}
		
			// B8 spam check: 
			if ($settings['b8_mail_check'] == 1) {
				try {
					$check_text = implode("\r\n", $check_mail);
					$b8_spam_probability = 100.0 * $B8_BAYES_FILTER->classify($check_text);
					if ($b8_spam_probability > intval($settings['b8_spam_probability_threshold']))
						$errors[] = 'error_email_spam_suspicion';
				}
				catch(Exception $e) {
					raise_error('database_error', $e->getMessage()); // What should we do here?
					$b8_spam = 0;
				}
			}
		}

		if (empty($errors)) {
			if (isset($id)) {
				// get email address from entry:
				$result = @mysqli_query($connid, "SELECT user_id AS recipient_user_id, name, email FROM ".$db_settings['forum_table']." WHERE id = ".intval($id)." LIMIT 1") or raise_error('database_error', mysqli_error($connid));
				if(mysqli_num_rows($result) != 1) {
					header('Location: index.php');
					exit;
				}
				$data = mysqli_fetch_array($result);
				mysqli_free_result($result);
				if ($data['recipient_user_id'] > 0) {
					// registered user, get  data from userdata table:
					$result = @mysqli_query($connid, "SELECT user_email, email_contact FROM ".$db_settings['userdata_table']." WHERE user_id = ".intval($data['recipient_user_id'])." LIMIT 1") or raise_error('database_error', mysqli_error($connid));
					$userdata = mysqli_fetch_array($result);
					mysqli_free_result($result);
					if ($isModOrAdmin || $isUser && $userdata['email_contact'] > 0 || $userdata['email_contact'] == 2) {
						$smarty->assign('recipient_name', htmlspecialchars($userdata['user_name']));
						$recipient_email = $data['user_email'];
					} else {
						$errors[] = TRUE;
						$smarty->assign('error_message', 'impossible_to_contact');
					}
				} else {
					// not registered user, get data from forum table:
					if ($data['email'] == '') {
						$errors[] = TRUE;
						$smarty->assign('error_message','impossible_to_contact');
					} else {
						$recipient_name = htmlspecialchars($data['name']);
						$recipient_email = $data['email'];
						$smarty->assign('recipient_name', $recipient_name);
					}
				}
			} elseif (isset($recipient_user_id)) {
				$result = @mysqli_query($connid, "SELECT user_name, user_email, email_contact FROM ".$db_settings['userdata_table']." WHERE user_id = '".intval($recipient_user_id)."' LIMIT 1") or raise_error('database_error', mysqli_error($connid));
				if (mysqli_num_rows($result) != 1) {
					header('Location: index.php');
					exit;
				}
				$userdata = mysqli_fetch_array($result);
				mysqli_free_result($result);
				if ($isModOrAdmin || $isUser && $userdata['email_contact'] > 0 || $userdata['email_contact'] == 2) {
					$recipient_name = htmlspecialchars($userdata['user_name']);
					$recipient_email = $userdata['user_email'];
					$smarty->assign('recipient_name', $recipient_name);
				} else {
					$errors[] = TRUE;
					$smarty->assign('error_message', 'impossible_to_contact');
				}
			} else {
				$recipient_name = $settings['forum_name'];
				$recipient_email = $settings['forum_email'];
			}
		}

		if (empty($errors)) {
			// load e-mail strings from default language file:
			$smarty->configLoad($settings['language_file'], 'emails');
			$lang = $smarty->getConfigVars();
			if (isset($_SESSION[$settings['session_prefix'].'user_name'])) 
				$emailbody = str_replace("[user]", $_SESSION[$settings['session_prefix'].'user_name'], $lang['contact_email_txt_user']);
			else 
				$emailbody = $lang['contact_email_txt'];
			$emailbody = str_replace("[message]", $text, $emailbody);
			$emailbody = str_replace("[forum_address]", $settings['forum_address'], $emailbody);
			if (!my_mail($recipient_email, $subject, $emailbody, $sender_email)) 
				$errors[] = 'mail_error';
			if (isset($_SESSION[$settings['session_prefix'].'user_id']) && $confirmation_mail_to_sender && !my_mail($sender_email, $subject, $emailbody, $sender_email))
				$errors[] = 'mail_error';
		}
		if (isset($errors)) {
			$smarty->assign('errors',$errors);
			if (isset($id)) 
				$smarty->assign('id', intval($id));
			if (isset($recipient_user_id)) 
				$smarty->assign('recipient_user_id', intval($recipient_user_id));
			if (isset($sender_email)) 
				$smarty->assign('sender_email', htmlspecialchars($sender_email));
			if (isset($text)) 
				$smarty->assign('text', htmlspecialchars($text));
			if (isset($subject)) 
				$smarty->assign('subject', htmlspecialchars($subject));
		} else {
			$smarty->assign('sent', TRUE);
		}
	break;
}

// CAPTCHA:
if (empty($_SESSION[$settings['session_prefix'].'user_id']) && $settings['captcha_email'] > 0) {
	if($settings['captcha_email'] == 2) {
		$_SESSION['captcha_session'] = $captcha->generate_code();
	} else {
		$_SESSION['captcha_session'] = $captcha->generate_math_captcha();
		$captcha_tpl['number_1'] = $_SESSION['captcha_session'][0];
		$captcha_tpl['number_2'] = $_SESSION['captcha_session'][1];
	}
	$captcha_tpl['type'] = $settings['captcha_email'];
	$smarty->assign('captcha', $captcha_tpl);
}

if (empty($_SESSION[$settings['session_prefix'].'user_id'])) {
	$session['name'] = session_name();
	$session['id'] = session_id();
	$smarty->assign('session', $session);
}

$smarty->assign('subnav_location','subnav_contact');
$smarty->assign('subtemplate','contact.inc.tpl');
$template = 'main.tpl';
?>
