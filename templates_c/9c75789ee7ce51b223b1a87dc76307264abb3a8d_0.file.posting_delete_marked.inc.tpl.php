<?php
/* Smarty version 4.1.0, created on 2022-08-23 18:31:43
  from 'C:\xampp\htdocs\giovanni\ForumC2C\themes\default\subtemplates\posting_delete_marked.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63051d0f141540_84549305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c75789ee7ce51b223b1a87dc76307264abb3a8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\giovanni\\ForumC2C\\themes\\default\\subtemplates\\posting_delete_marked.inc.tpl',
      1 => 1661273204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63051d0f141540_84549305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "delete_posting", 0);
?>

<?php if ($_smarty_tpl->tpl_vars['no_authorisation']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['no_authorisation']->value);?>
</p>
<?php } else { ?>
<h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_marked_hl');?>
</h1>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_marked_confirm');?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="posting" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<input type="submit" name="delete_marked_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_posting_submit');?>
" />
</div>
</form>
<?php }
}
}
