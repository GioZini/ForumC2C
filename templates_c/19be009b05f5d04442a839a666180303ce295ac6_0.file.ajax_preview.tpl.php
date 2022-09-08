<?php
/* Smarty version 4.1.0, created on 2022-09-05 17:29:15
  from 'C:\xampp\htdocs\dev\ForumC2C\themes\default\ajax_preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_631631eb2ae7a4_23251223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19be009b05f5d04442a839a666180303ce295ac6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev\\ForumC2C\\themes\\default\\ajax_preview.tpl',
      1 => 1662397967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631631eb2ae7a4_23251223 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax-preview-top"></div>
<div id="ajax-preview-main">
 <div id="ajax-preview-body">
  <img id="ajax-preview-close" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/close.png" alt="[x]" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'close');?>
" />
  <div id="ajax-preview-content"></div>
 </div>
</div>
<?php }
}
