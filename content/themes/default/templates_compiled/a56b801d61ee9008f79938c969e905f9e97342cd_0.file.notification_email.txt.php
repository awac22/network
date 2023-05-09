<?php
/* Smarty version 3.1.40, created on 2023-01-08 22:05:08
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/emails/notification_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63bb3e146a9df7_32304506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a56b801d61ee9008f79938c969e905f9e97342cd' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/emails/notification_email.txt',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bb3e146a9df7_32304506 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['receiver']->value['name'];?>
,

<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>

<?php echo $_smarty_tpl->tpl_vars['notification']->value['url'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
