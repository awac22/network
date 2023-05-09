<?php
/* Smarty version 3.1.40, created on 2023-02-21 08:55:44
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/admin.dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63f48710082f97_26450818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14021dd54910d54291534a7a729ea3caa21fe265' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/admin.dashboard.tpl',
      1 => 1676969707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f48710082f97_26450818 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-tachometer-alt mr10"></i><?php echo __("Dashboard");?>

    </div>
    <div class="card-body">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
		
		       <div class="row">
										<div  class="col-md-12 mt-3  mb-3  mt-md-0"><br/><br/>
											<select style="color:#000;width:200px;border:1px solid #000;"  onchange="admin(this.value);" name="admin" class="admin_change btn btn-outline-light"> 
												<option value="">Select Admin</option>
												<option value="https://anywhereanycity.com/home/login/admin?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Home</option>
												<option value="https://anywhereanycity.com/awactv?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">AWACTV</option>
												<option value="https://awacradio.anywhereanycity.com/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">AWACRADIO</option>
												<option value="https://anywhereanycity.com/art/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Art</option>
												<option value="https://anywhereanycity.com/gallery/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Gallery</option>
												<option value="https://events.anywhereanycity.com/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Events</option>
												<option value="https://anywhereanycity.com/fashion/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Fashion</option>
												<option value="https://anywhereanycity.com/marketplace/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Marketplace</option>
												<option value="https://anywhereanycity.com/network/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Network</option>
												<option value="https://anywhereanycity.com/support/?e=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">Support</option>
												
											
											
											</select> 
											<br/><br/>
										</div>
									</div> 
            <div id="admin-chart-dashboard" class="admin-chart mb20"></div>
			
            <div class="row">
                <div class="col-sm-6">
                    <div class="stat-panel bg-gradient-primary">
                        <div class="stat-cell">
                            <i class="fa fa-users bg-icon"></i>
                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users'];?>
</span><br>
                            <span class="text-lg"><?php echo __("Users");?>
</span><br>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users"><?php echo __("Manage Users");?>
</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="stat-panel bg-gradient-teal">
                        <div class="stat-cell">
                            <i class="fa fa-clock bg-icon"></i>
                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['online'];?>
</span><br>
                            <span class="text-lg"><?php echo __("Online");?>
</span><br>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/online"><?php echo __("Manage Online");?>
</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="stat-panel bg-gradient-red">
                        <div class="stat-cell">
                            <i class="fa fa-minus-circle bg-icon"></i>
                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['banned'];?>
</span><br>
                            <span class="text-lg"><?php echo __("Banned");?>
</span><br>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/banned"><?php echo __("Manage Banned");?>
</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="stat-panel bg-gradient-warning">
                        <div class="stat-cell">
                            <i class="fa fa-envelope bg-icon"></i>
                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['not_activated'];?>
</span><br>
                            <span class="text-lg"><?php echo __("Not Activated");?>
</span><br>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users"><?php echo __("Manage Users");?>
</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="form-row">
            <div class="col-sm-6">
                <div class="stat-panel bg-gradient-success">
                    <div class="stat-cell">
                        <i class="fa fa-newspaper bg-icon"></i>
                        <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['posts'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Posts");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/posts"><?php echo __("Manage Posts");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="stat-panel bg-gradient-success">
                    <div class="stat-cell">
                        <i class="fa fa-comments bg-icon"></i>
                        <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['comments'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Comments");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/reports"><?php echo __("Manage Reports");?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-4">
                <div class="stat-panel bg-gradient-primary">
                    <div class="stat-cell">
                        <i class="fa fa-flag bg-icon"></i>
                        <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['pages'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Pages");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pages"><?php echo __("Manage Pages");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="stat-panel bg-gradient-primary">
                    <div class="stat-cell">
                        <i class="fa fa-users bg-icon"></i>
                        <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['groups'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Groups");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups"><?php echo __("Manage Groups");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="stat-panel bg-gradient-primary">
                    <div class="stat-cell">
                        <i class="fa fa-calendar bg-icon"></i>
                        <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['events'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Events");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/events"><?php echo __("Manage Events");?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="stat-panel bg-gradient-info">
                        <div class="stat-cell">
                            <i class="fa fa-comments bg-icon"></i>
                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['messages'];?>
</span><br>
                            <span class="text-lg"><?php echo __("Messages");?>
</span><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="stat-panel bg-gradient-cyan">
                        <div class="stat-cell">
                            <i class="fa fa-globe bg-icon"></i>
                            <span class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['notifications'];?>
</span><br>
                            <span class="text-lg"><?php echo __("Notifications");?>
</span><br>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">		
	 
	 function admin( value){
		 
		  location.href = value;
	 }
	 
	 


<?php echo '</script'; ?>
> <?php }
}
