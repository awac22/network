<?php
/* Smarty version 3.1.40, created on 2022-04-11 10:49:07
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/static.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_625407a3357675_14306111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dff5d1ef202c581ddfd6d1666c8a73bda2b2d490' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/static.tpl',
      1 => 1639887674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_625407a3357675_14306111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __($_smarty_tpl->tpl_vars['static']->value['page_title']);?>
</h2>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container offcanvas" style="margin-top: -25px;">
    <div class="row">

	    <!-- side panel -->
		<div class="col-12 d-block d-md-none offcanvas-sidebar mt20">
			<?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	    <!-- side panel -->

	    <!-- content panel -->
	    <div class="col-12 offcanvas-mainbar">
    		<div class="card shadow">
    			<div class="card-body page-content text-xlg text-with-list">
			        <?php echo $_smarty_tpl->tpl_vars['static']->value['page_text'];?>

    			</div>
    		</div>
	    </div>
	    <!-- content panel -->
	    
	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
