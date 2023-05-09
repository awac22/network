<?php
/* Smarty version 3.1.40, created on 2022-12-24 06:30:16
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/admin.bank.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63a69c788c0726_18567996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fb8c3ab0dae71fa5978f16b92fb8f1e314b9ad9' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/admin.bank.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a69c788c0726_18567996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/anywhereanycity/public_html/network/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-university mr10"></i><?php echo __("Bank Receipts");?>

    </div>

    <div class="card-body">

        <?php if (!$_smarty_tpl->tpl_vars['system']->value['bank_transfers_enabled']) {?>
            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fa fa-exclamation-triangle fa-2x"></i>
                </div>
                <div class="text pt5">
                    <?php echo __("Bank transfers is disabled");?>
, <?php echo __("Make sure you have configured");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
                </div>
            </div>
        <?php }?>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
                <thead>
                    <tr>
                        <th><?php echo __("ID");?>
</th>
                        <th><?php echo __("User");?>
</th>
                        <th><?php echo __("Handle");?>
</th>
                        <th><?php echo __("Time");?>
</th>
                        <th><?php echo __("Actions");?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['transfer_id'];?>
</td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];
}?>
                                </a>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['handle'] == "packages") {?>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['package_name'];?>
 <?php echo __("Package");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['row']->value['package_price']);?>
</strong>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['handle'] == "wallet") {?>
                                    <?php echo __("Add Wallet Balance");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['row']->value['price']);?>
</strong>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['handle'] == "donate") {?>
                                    <?php echo __("Funding Donation");?>
 = <strong><?php echo print_money($_smarty_tpl->tpl_vars['row']->value['price']);?>
</strong>
                                <?php }?>
                            </td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("View Bank Receipt");?>
' class="btn btn-sm btn-icon btn-rounded btn-info js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['bank_receipt'];?>
">
                                    <i class="fa fa-paperclip"></i>
                                </button>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Verify");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-bank-accept" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['transfer_id'];?>
">
                                    <i class="fa fa-check"></i>
                                </button>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-bank-decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['transfer_id'];?>
">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>

</div><?php }
}
