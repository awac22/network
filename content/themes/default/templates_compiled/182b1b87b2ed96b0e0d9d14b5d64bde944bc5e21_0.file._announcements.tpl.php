<?php
/* Smarty version 3.1.40, created on 2022-04-06 17:19:07
  from '/home/anywhereanycity/public_html/network/Script/content/themes/default/templates/_announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_624dcb8bb35bf6_89286343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182b1b87b2ed96b0e0d9d14b5d64bde944bc5e21' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/Script/content/themes/default/templates/_announcements.tpl',
      1 => 1639887674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624dcb8bb35bf6_89286343 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['announcement']->value['type'];?>
 text-with-list" data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcement_id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
			<button type="button" class="close float-right js_announcment-remover"><span>&times;</span></button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['announcement']->value['title']) {?><div class="title"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</div><?php }?>
		<?php echo $_smarty_tpl->tpl_vars['announcement']->value['code'];?>

	</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
