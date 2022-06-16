<?php
/* Smarty version 4.1.0, created on 2022-06-16 02:56:55
  from 'C:\xampp\htdocs\forumc2c\themes\default\ajax_preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62aa9bf75d9b42_79952608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6bb649aae4d6a5696a1b2e3e232687b3e22b1ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forumc2c\\themes\\default\\ajax_preview.tpl',
      1 => 1653850827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62aa9bf75d9b42_79952608 (Smarty_Internal_Template $_smarty_tpl) {
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
