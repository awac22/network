<?php
/* Smarty version 3.1.40, created on 2022-06-28 11:30:17
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.chat.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62bae6494d0302_22283148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a548e642ffd31f3b8357afde2edc25a4a08060' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.chat.messages.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_message.tpl' => 1,
  ),
),false)) {
function content_62bae6494d0302_22283148 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
$_smarty_tpl->_subTemplateRender('file:__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
