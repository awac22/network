<?php
/* Smarty version 3.1.40, created on 2022-05-23 07:23:41
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.lightbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628b367dce57f3_57161256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a3b42bff07eae3dc8532b81d4c21e1e12af91f' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/ajax.lightbox.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_photo.tpl' => 1,
  ),
),false)) {
function content_628b367dce57f3_57161256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('post', $_smarty_tpl->tpl_vars['photo']->value['post']);?>

<div class="lightbox-post" data-id="<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {
echo $_smarty_tpl->tpl_vars['post']->value['post_id'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];
}?>">
	<div class="js_scroller" data-slimScroll-height="100%">
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_lightbox'=>true), 0, false);
?>
	</div>
</div><?php }
}
