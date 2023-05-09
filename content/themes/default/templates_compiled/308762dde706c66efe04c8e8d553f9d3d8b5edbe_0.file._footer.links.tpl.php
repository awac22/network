<?php
/* Smarty version 3.1.40, created on 2023-05-09 11:19:59
  from '/var/www/html/anywhereanycity/awac_network/content/themes/default/templates/_footer.links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_645a2c5fac43d4_76437922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308762dde706c66efe04c8e8d553f9d3d8b5edbe' => 
    array (
      0 => '/var/www/html/anywhereanycity/awac_network/content/themes/default/templates/_footer.links.tpl',
      1 => 1662553747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645a2c5fac43d4_76437922 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- footer links -->
<div class="container">
	<div class="row footer <?php if ($_smarty_tpl->tpl_vars['page']->value == 'index' && !$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>border-top-0<?php }?>">
		<div class="col-sm-6 dropdown">
			<span class="mr5">© <?php echo date('Y');?>
 All Rights Reserved by AnywhereAnycity.Com LLC.</span>
			<!-- language -->
			<a href="#" class="language-dropdown" data-toggle="dropdown">
                <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['flag'];?>
">
                <span><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
            </a>
            <div class="dropdown-menu">
				<div class="js_scroller">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
">
							<img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>

						</a>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
            <!-- language -->
		</div>

		<div class="col-sm-6 links">
			<?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page');
$_smarty_tpl->tpl_vars['static_page']->index = -1;
$_smarty_tpl->tpl_vars['static_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->do_else = false;
$_smarty_tpl->tpl_vars['static_page']->index++;
$_smarty_tpl->tpl_vars['static_page']->first = !$_smarty_tpl->tpl_vars['static_page']->index;
$__foreach_static_page_15_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
					<a <?php if (!$_smarty_tpl->tpl_vars['static_page']->first) {?>class="pl10"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
						<?php echo __($_smarty_tpl->tpl_vars['static_page']->value['page_title']);?>

					</a>
				<?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_15_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
				<a class="pl10" href="https://anywhereanycity.com/home/newsletter">
					<?php echo __("Subscribe Newsletter ");?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
				<a class="pl10" href="https://anywhereanycity.com/support/">
					<?php echo __("Support ");?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
				<a class="pl10" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
					<?php echo __("Directory");?>

				</a>
			<?php }?>
		</div>
	</div>
</div>
<!-- footer links --><?php }
}
