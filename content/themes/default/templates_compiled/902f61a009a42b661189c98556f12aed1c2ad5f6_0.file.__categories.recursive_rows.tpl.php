<?php
/* Smarty version 3.1.40, created on 2022-12-19 08:52:41
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/__categories.recursive_rows.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63a026592e9fa5_20414367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '902f61a009a42b661189c98556f12aed1c2ad5f6' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/__categories.recursive_rows.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_rows.tpl' => 2,
  ),
),false)) {
function content_63a026592e9fa5_20414367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/anywhereanycity/public_html/network/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<tr class="treegrid-<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
 <?php if ($_smarty_tpl->tpl_vars['row']->value['category_parent_id'] != '0') {?>treegrid-parent-<?php echo $_smarty_tpl->tpl_vars['row']->value['category_parent_id'];
}?>">
    <td>
        <?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>

    </td>
    <td>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['category_description'],50);?>

    </td>
    <td>
        <span class="badge badge-pill badge-lg badge-info"><?php echo $_smarty_tpl->tpl_vars['row']->value['category_order'];?>
</span>
    </td>
    <td>
        <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
/edit_category/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
            <i class="fa fa-pencil-alt"></i>
        </a>
        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
">
            <i class="fa fa-trash-alt"></i>
        </button>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['row']->value['sub_categories']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['sub_categories'], '_row');
$_smarty_tpl->tpl_vars['_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_row']->value) {
$_smarty_tpl->tpl_vars['_row']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('row'=>$_smarty_tpl->tpl_vars['_row']->value,'_url'=>$_smarty_tpl->tpl_vars['_url']->value,'_handle'=>$_smarty_tpl->tpl_vars['_handle']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
