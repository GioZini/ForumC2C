<?php
/* Smarty version 4.1.0, created on 2022-08-23 18:17:24
  from 'C:\xampp\htdocs\giovanni\ForumC2C\themes\default\subtemplates\info.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_630519b4a13323_11668539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f0fac737fc00a54b6737c1bdef6c47659e65067' => 
    array (
      0 => 'C:\\xampp\\htdocs\\giovanni\\ForumC2C\\themes\\default\\subtemplates\\info.inc.tpl',
      1 => 1661273204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630519b4a13323_11668539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\giovanni\\ForumC2C\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
