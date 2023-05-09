<?php
/* Smarty version 3.1.40, created on 2023-01-19 10:56:08
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.lightbox-live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63c921c82bf9c4_60216364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '921871cc4a9d16035653eb42c1070b02188b5c75' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.lightbox-live.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_live.tpl' => 1,
  ),
),false)) {
function content_63c921c82bf9c4_60216364 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lightbox-post" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
	<div class="js_scroller" data-slimScroll-height="100%">
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_live.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div><?php }
}
