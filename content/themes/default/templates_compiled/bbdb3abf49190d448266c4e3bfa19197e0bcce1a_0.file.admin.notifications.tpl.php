<?php
/* Smarty version 3.1.40, created on 2022-12-24 07:45:31
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/admin.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63a6ae1ba45c43_59259392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbdb3abf49190d448266c4e3bfa19197e0bcce1a' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/admin.notifications.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a6ae1ba45c43_59259392 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-bell mr10"></i><?php echo __("Mass Notifications");?>

    </div>

    <!-- Mass Notifications -->
    <form class="js_ajax-forms" data-url="admin/notifications.php">
        <div class="card-body">
            <div class="alert alert-primary">
                <div class="icon">
                    <i class="fa fa-bell fa-2x"></i>
                </div>
                <div class="text">
                    <strong><?php echo __("Mass Notifications");?>
</strong><br>
                    <?php echo __("Enable you to send notifications to all site users");?>
.<br>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("URL");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="url">
                    <span class="form-text">
                        <?php echo __("Notification link used when user clicks on the notification");?>

                    </span>
                </div>
            </div>
            
            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Message");?>

                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="3" name="message"></textarea>
                </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mb0 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 x-hidden"></div>
            <!-- error -->
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-danger">
                <i class="fa fa-paper-plane mr10"></i><?php echo __("Send");?>

            </button>
        </div>
    </form>
    <!-- Mass Notifications -->
        
</div><?php }
}
