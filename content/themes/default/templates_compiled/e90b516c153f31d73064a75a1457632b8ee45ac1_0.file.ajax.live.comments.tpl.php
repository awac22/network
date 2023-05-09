<?php
/* Smarty version 3.1.40, created on 2023-01-18 17:38:21
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.live.comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63c82e8d1ee5c4_88129343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e90b516c153f31d73064a75a1457632b8ee45ac1' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.live.comments.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.tpl' => 1,
  ),
),false)) {
function content_63c82e8d1ee5c4_88129343 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
$_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
