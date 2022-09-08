<?php
/* Smarty version 4.1.0, created on 2022-09-05 23:38:25
  from 'C:\xampp\htdocs\dev\ForumC2C\themes\default\subtemplates\info.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63168871829d64_12898058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dfc49ef50c19a6e56e2efac8e7cbdc1c887f7eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev\\ForumC2C\\themes\\default\\subtemplates\\info.inc.tpl',
      1 => 1662397967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63168871829d64_12898058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\dev\\ForumC2C\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['lang_section']->value) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->tpl_vars['lang_section']->value, 0);
}
if ($_smarty_tpl->tpl_vars['custom_message']->value) {?>
<p><?php echo $_smarty_tpl->tpl_vars['custom_message']->value;?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value) {?>
<p><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value),"[var]",$_smarty_tpl->tpl_vars['var']->value);?>
</p>
<?php }
}
}
