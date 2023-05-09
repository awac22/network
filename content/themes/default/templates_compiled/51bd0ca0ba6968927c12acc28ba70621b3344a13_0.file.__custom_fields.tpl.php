<?php
/* Smarty version 3.1.40, created on 2022-08-05 17:30:48
  from '/home/anywhereanycity/public_html/network/content/themes/default/templates/__custom_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62ed53c8094e07_35142827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51bd0ca0ba6968927c12acc28ba70621b3344a13' => 
    array (
      0 => '/home/anywhereanycity/public_html/network/content/themes/default/templates/__custom_fields.tpl',
      1 => 1659720580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ed53c8094e07_35142827 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_registration']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
        <div class="form-group">
            <label class="form-control-label"><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>*<?php }?></label>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
			 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['field_id'] == 5 || $_smarty_tpl->tpl_vars['custom_field']->value['field_id'] == 6) {?>
			 <div class="input-group date js_datetimepicker" id="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" data-target-input="nearest"> 
			 <?php }?>
                <input <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['field_id'] == 5 || $_smarty_tpl->tpl_vars['custom_field']->value['field_id'] == 6) {?>    class="form-control datetimepicker-input"  <?php } else { ?>  class="form-control" 	 <?php }?> name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" data-target="#fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" type="text"  <?php if (!$_smarty_tpl->tpl_vars['_search']->value) {?>placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
				
				 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['field_id'] == 5 || $_smarty_tpl->tpl_vars['custom_field']->value['field_id'] == 6) {?>
				 
				 <div class="input-group-append" data-target="#fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" data-toggle="datetimepicker"> 
					<span class="input-group-text"><i class="fa fa-calendar"></i></span> 
				</div>
			 </div>
			 <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
                <textarea name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if (!$_smarty_tpl->tpl_vars['_search']->value) {?>placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>></textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['_search']->value) {?>
                        <option selected value="any"><?php echo __("Any");?>
</option>
                    <?php } else { ?>
                        <option selected value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
[]" class="form-control" multiple <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['description'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>
                <span class="form-text">
                    <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['description']);?>

                </span>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
	    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?>form-row<?php }?>">
	    	<label class="form-control-label <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?>col-md-3<?php }?>"><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>*<?php }?></label>
            <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?><div class="col-md-9"><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
                <input type="text" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
                <textarea name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
                    <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == '') {?>selected<?php }?> value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
                <select name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
[]" class="form-control" multiple <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option <?php if ((isset($_smarty_tpl->tpl_vars['custom_field']->value['value'])) && in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['custom_field']->value['value'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['description']) {?>
                <span class="form-text">
                    <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['description']);?>

                </span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?></div><?php }?>
	    </div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
