<?php
/* Smarty version 3.1.40, created on 2023-01-18 17:37:56
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_63c82e747a5c24_96697705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c4020368431de93559caf1beef2e7adbe0bd87' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/live.tpl',
      1 => 1638150504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_63c82e747a5c24_96697705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- side panel -->
        <div class="col-12 d-block d-md-none offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- side panel -->

        <!-- content panel -->
        <div class="col-12 offcanvas-mainbar">
            
            <div class="live-stream-wrapper">

                <!-- live stream title -->
                <div class="live-stream-title clearfix">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'width'=>"40px",'height'=>"40px"), 0, false);
?>
                    <?php echo __("Live Video");?>

                    <div class="float-right">
                        <div class="btn btn-danger rounded-pill x-hidden" id="js_live-end"><i class="fas fa-power-off mr5"></i><?php echo __("End");?>
</div>
                        <div class="btn btn-primary rounded-pill x-hidden" id="js_live-start"><i class="fas fa-play mr5"></i><?php echo __("Go Live");?>
</div>
                    </div>
                </div>
                <!-- live stream title -->

                <!-- live stream video -->
                <div class="live-stream-video">

                    <!-- live counter -->
                    <div class="live-counter">
                        <span class="status offline" id=js_live-counter-status><?php echo __("Offline");?>
</span>
                        <span class="number">
                            <i class="fas fa-eye mr5"></i><strong id="js_live-counter-number">0</strong>    
                        </span>
                    </div>
                    <!-- live counter -->

                    <!-- live recording -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['save_live_enabled']) {?>
                        <div class="live-recording" id="js_live-recording">
                            <span>
                                <i class="fas fa-record-vinyl mr5"></i><span><?php echo __("Recording");?>
</span>
                            </span>
                        </div>
                    <?php }?>
                    <!-- live recording -->

                    <!-- live status -->
                    <div class="live-status" id="js_live-status">
                        <div class="mb5"><i class="fas fa-camera fa-2x"></i></div>
                        <?php echo __("Getting the Camera and Mic permissions");?>
<span class="spinner-grow spinner-grow-sm ml10"></span>
                    </div>
                    <!-- live status -->

                    <!-- live comments -->
                    <div class="live-comments" id="live-comments">
                        <ul class="js_scroller" data-slimScroll-height="100%"></ul>
                    </div>
                    <!-- live comments -->

                    <!-- live video -->
                    <div id="js_live-video" style="width: 100%;height: 100%; background: #000"></div>
                    <!-- live video -->
                </div>
                <!-- live stream video -->

                <!-- live stream buttons -->
                <div class="live-stream-buttons" id="js_live-stream-buttons">
                    <button class="btn btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_mute-mic" id="mic-btn" disabled>
                        <i class="fas fa-microphone fa-fw"></i>
                    </button>
                    <button class="btn btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_mute-cam" id="cam-btn" disabled>
                        <i class="fas fa-video fa-fw"></i>
                    </button>
                    <button class="btn btn-icon btn-rounded btn-secondary mr10 js_mute-comments" id="comments-btn" disabled>
                        <i class="fas fa-comments fa-fw"></i>
                    </button>
                </div>
                <!-- live stream buttons -->

                

            </div>

        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
