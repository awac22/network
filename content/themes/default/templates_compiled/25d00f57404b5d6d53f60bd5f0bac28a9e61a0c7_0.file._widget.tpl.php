<?php
/* Smarty version 3.1.40, created on 2022-04-06 17:19:07
  from '/home/anywhereanycity/public_html/network/Script/content/themes/default/templates/_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_624dcb8bc33187_87048238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d00f57404b5d6d53f60bd5f0bac28a9e61a0c7' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/Script/content/themes/default/templates/_widget.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624dcb8bc33187_87048238 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
	<!-- Widgets -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
		<div class="card">
		    <div class="card-header">
		        <strong><?php ob_start();
echo $_smarty_tpl->tpl_vars['widget']->value['title'];
$_prefixVariable1 = ob_get_clean();
echo __($_prefixVariable1);?>
</strong>
		    </div>
		    <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- Widgets -->
<?php }
}
}
