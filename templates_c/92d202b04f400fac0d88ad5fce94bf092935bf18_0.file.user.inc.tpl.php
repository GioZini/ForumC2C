<?php
/* Smarty version 4.1.0, created on 2022-09-06 00:51:35
  from 'C:\xampp\htdocs\dev\ForumC2C\themes\default\subtemplates\user.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63169997d5f820_38928147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d202b04f400fac0d88ad5fce94bf092935bf18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dev\\ForumC2C\\themes\\default\\subtemplates\\user.inc.tpl',
      1 => 1662397967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63169997d5f820_38928147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\dev\\ForumC2C\\modules\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'C:\\xampp\\htdocs\\dev\\ForumC2C\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "user", 0);
?>

<div id="usernav">
<div id="usersearch">
<label for="search-user"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search_user');?>
</label><form action="index.php" method="get" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="user" />
<input id="search-user" type="text" name="search_user" value="<?php if ($_smarty_tpl->tpl_vars['search_user']->value) {
echo $_smarty_tpl->tpl_vars['search_user']->value;
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search_user_default_value');
}?>" size="25" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search_user_default_value');?>
" /></div>
</form>
</div>
<div id="userpagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}
if ($_smarty_tpl->tpl_vars['pagination']->value['previous'] > 1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];
}
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link');?>
</a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if ($_smarty_tpl->tpl_vars['item']->value == 0) {?><li>&hellip;</li><?php } elseif ($_smarty_tpl->tpl_vars['item']->value == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span></li><?php } else { ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}
if ($_smarty_tpl->tpl_vars['item']->value > 1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
}
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link');?>
</a></li><?php }?>
</ul>
<?php } else { ?>
&nbsp;
<?php }?>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['total_users']->value > 0) {?>
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<thead>
<tr>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_name&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_name") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_name');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_name" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_name" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_type&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_type") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_type');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_type" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_type" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_hp&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_hp") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_hp');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_hp" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_hp" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=email_contact&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "email_contact") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_email');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "email_contact" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "email_contact" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<?php if ($_smarty_tpl->tpl_vars['mod']->value || $_smarty_tpl->tpl_vars['admin']->value) {?><th><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_lock&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_lock") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_blockage');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_lock" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_lock" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th><?php }?>
</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userdata']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'show_userdata_linktitle'),"[user]",$_smarty_tpl->tpl_vars['row']->value['user_name']);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</strong></a></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_type'] == 2) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin');
} elseif ($_smarty_tpl->tpl_vars['row']->value['user_type'] == 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mod');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user');
}?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_hp'] != '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_hp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_hp'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/homepage.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'homepage');?>
" width="13" height="13" /></a><?php } else { ?>&nbsp;<?php }?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_email']) {?><a href="index.php?mode=contact&amp;user_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mailto_user'),"[user]",$_smarty_tpl->tpl_vars['row']->value['user_name']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/email.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'email');?>
" width="13" height="10" /></a><?php } else { ?>&nbsp;<?php }?></span></td>
<?php if ($_smarty_tpl->tpl_vars['mod']->value || $_smarty_tpl->tpl_vars['admin']->value) {?><td><span class="small"><?php if ($_smarty_tpl->tpl_vars['row']->value['user_type'] > 0) {
if ($_smarty_tpl->tpl_vars['row']->value['user_lock'] == 0) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlocked');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'locked');
}
} elseif ($_smarty_tpl->tpl_vars['row']->value['user_lock'] == 0) {?><a href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lock_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlocked');?>
</a><?php } else { ?><a class="user-locked" href="index.php?mode=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlock_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_locked');?>
</a><?php }?></span></td><?php }?>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination pagination-index-table">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}
if ($_smarty_tpl->tpl_vars['pagination']->value['previous'] > 1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];
}
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link');?>
</a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if ($_smarty_tpl->tpl_vars['item']->value == 0) {?><li>&hellip;</li><?php } elseif ($_smarty_tpl->tpl_vars['item']->value == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span></li><?php } else { ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}
if ($_smarty_tpl->tpl_vars['item']->value > 1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
}
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link');?>
</a></li><?php }?>
</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['users_online']->value) {?>
<div id="usersonline">
<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'currently_online');?>
</h3>
<p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users_online']->value, 'user', false, NULL, 'users_online', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_users_online']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_users_online']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_users_online']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_users_online']->value['total'];
?><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_users_online']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_users_online']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
</div>
<?php }?>

<?php } else { ?>
<p><em><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_users');?>
</em></p>
<?php }
}
}
