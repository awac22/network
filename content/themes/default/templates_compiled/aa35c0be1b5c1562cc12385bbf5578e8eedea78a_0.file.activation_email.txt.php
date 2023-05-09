<?php
/* Smarty version 3.1.40, created on 2023-02-06 10:20:07
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/emails/activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63e0d457ea8a75_57665066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa35c0be1b5c1562cc12385bbf5578e8eedea78a' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/emails/activation_email.txt',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e0d457ea8a75_57665066 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
