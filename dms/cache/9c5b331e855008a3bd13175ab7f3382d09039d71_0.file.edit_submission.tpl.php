<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:22:11
  from "/home/mobatxik/public_html/dms/themes/default/clients/forms/edit_submission.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299e0370da17_94244632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c5b331e855008a3bd13175ab7f3382d09039d71' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/clients/forms/edit_submission.tpl',
      1 => 1573345306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299e0370da17_94244632 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_views_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.views_dropdown.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_edit_custom_field')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.edit_custom_field.php';
if (!is_callable('smarty_function_display_email_template_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.display_email_template_dropdown.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


<div class="edit_submission">
    <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td><span class="title"><?php echo $_smarty_tpl->tpl_vars['edit_submission_page_label']->value;?>
</span></td>
            <td align="right">
                <?php echo smarty_function_views_dropdown(array('grouped_views'=>$_smarty_tpl->tpl_vars['grouped_views']->value,'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'submission_id'=>$_smarty_tpl->tpl_vars['submission_id']->value,'selected'=>$_smarty_tpl->tpl_vars['view_id']->value,'omit_hidden_views'=>true,'onchange'=>"window.location='".((string)$_smarty_tpl->tpl_vars['same_page']->value)."?form_id=".((string)$_smarty_tpl->tpl_vars['form_id']->value)."&submission_id=".((string)$_smarty_tpl->tpl_vars['submission_id']->value)."&view_id=' + this.value",'open_html'=>'<div class="views_dropdown">','close_html'=>'</div>','hide_single_view'=>true),$_smarty_tpl);?>

            </td>
        </tr>
    </table>

    <table cellpadding="0" cellspacing="0" class="pad_top_large pad_bottom_large">
        <tr>
            <td width="80" class="nowrap"><?php echo $_smarty_tpl->tpl_vars['previous_link_html']->value;?>
</td>
            <td width="150" class="nowrap"><?php echo $_smarty_tpl->tpl_vars['search_results_link_html']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['next_link_html']->value;?>
</td>
        </tr>
    </table>

    <?php echo smarty_function_template_hook(array('location'=>"client_edit_submission_top"),$_smarty_tpl);?>


    <?php if (count($_smarty_tpl->tpl_vars['tabs']->value) > 0) {?>
        <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


    <form action="edit_submission.php" method="post" name="edit_submission_form" id="edit_submission_form"
          enctype="multipart/form-data">
        
        <input type="hidden" name="form_id" id="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"/>
        <input type="hidden" name="submission_id" id="submission_id" value="<?php echo $_smarty_tpl->tpl_vars['submission_id']->value;?>
"/>
        <input type="hidden" name="tab" id="tab" value="<?php echo $_smarty_tpl->tpl_vars['tab_number']->value;?>
"/>

        <?php if ($_smarty_tpl->tpl_vars['changed_fields']->value) {?>

            <input type="hidden" name="core__reconcile_changed_fields" value="1" />

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changed_fields']->value, 'field', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                <table class="list_table" cellpadding="1" cellspacing="1" border="0" width="100%">
                    <tr>
                        <td width="160" rowspan="2" class="pad_left_small" valign="top"><?php echo $_smarty_tpl->tpl_vars['field']->value['field_title'];?>
</td>
                        <td width="160" class="pad_left">
                            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
" id="field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_db_value" value="db_value" />
                            <label for="field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_db_value">Value in database</label>
                        </td>
                        <td class="pad_left" valign="top">
                            <?php echo smarty_function_edit_custom_field(array('form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'submission_id'=>$_smarty_tpl->tpl_vars['submission_id']->value,'field_info'=>$_smarty_tpl->tpl_vars['field']->value['db_value'],'field_types'=>$_smarty_tpl->tpl_vars['field_types']->value,'settings'=>$_smarty_tpl->tpl_vars['settings']->value),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr>
                        <td class="pad_left">
                            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
" id="field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_user_value" value="user_value" checked="checked" />
                            <label for="field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_user_value">Your value</label>
                        </td>
                        <td class="pad_left" valign="top">
                            <?php echo smarty_function_edit_custom_field(array('form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'submission_id'=>$_smarty_tpl->tpl_vars['submission_id']->value,'field_info'=>$_smarty_tpl->tpl_vars['field']->value['user_value'],'field_types'=>$_smarty_tpl->tpl_vars['field_types']->value,'settings'=>$_smarty_tpl->tpl_vars['settings']->value),$_smarty_tpl);?>

                        </td>
                    </tr>
                </table>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


            <input type="hidden" name="field_ids" value="<?php echo $_smarty_tpl->tpl_vars['page_field_ids_str']->value;?>
"/>

            <p>
                <input type="submit" name="reconcile_fields" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
            </p>

        <?php } else { ?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouped_fields']->value, 'curr_group', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['curr_group']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('group', $_smarty_tpl->tpl_vars['curr_group']->value['group']);
?>
                <?php $_smarty_tpl->_assignInScope('fields', $_smarty_tpl->tpl_vars['curr_group']->value['fields']);
?>

                <?php if ($_smarty_tpl->tpl_vars['group']->value['group_name']) {?>
                    <h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['group']->value['group_name'], 'UTF-8');?>
</h3>
                <?php }?>

                <?php if (count($_smarty_tpl->tpl_vars['fields']->value) > 0) {?>
                    <table class="list_table" cellpadding="1" cellspacing="1" border="0" width="100%">
                <?php }?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'curr_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr_field']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('field_id', $_smarty_tpl->tpl_vars['curr_field']->value['field_id']);
?>
                    <tr>
                        <td width="160" class="pad_left_small" valign="top">
                            <?php echo $_smarty_tpl->tpl_vars['curr_field']->value['field_title'];?>

                            <?php if ($_smarty_tpl->tpl_vars['curr_field']->value['is_required'] && $_smarty_tpl->tpl_vars['curr_field']->value['is_editable'] == "yes") {?><span class="req">*</span><?php }?>
                        </td>
                        <td valign="top">
                            <?php echo smarty_function_edit_custom_field(array('form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'submission_id'=>$_smarty_tpl->tpl_vars['submission_id']->value,'field_info'=>$_smarty_tpl->tpl_vars['curr_field']->value,'field_types'=>$_smarty_tpl->tpl_vars['field_types']->value,'settings'=>$_smarty_tpl->tpl_vars['settings']->value),$_smarty_tpl);?>

                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                <?php if (count($_smarty_tpl->tpl_vars['fields']->value) > 0) {?>
                    </table>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


            <input type="hidden" name="field_ids" value="<?php echo $_smarty_tpl->tpl_vars['page_field_ids_str']->value;?>
"/>

            
            <?php if (count($_smarty_tpl->tpl_vars['page_field_ids']->value) == 0) {?>
                <div class="margin_bottom_large"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_no_fields_in_tab'];?>
</div>
            <?php }?>

            <div style="position:relative">
            <span style="float:right">
              
                <?php echo smarty_function_display_email_template_dropdown(array('form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'view_id'=>$_smarty_tpl->tpl_vars['view_id']->value,'submission_id'=>$_smarty_tpl->tpl_vars['submission_id']->value),$_smarty_tpl);?>

            </span>
                
                <?php if (count($_smarty_tpl->tpl_vars['page_field_ids']->value) > 0 && $_smarty_tpl->tpl_vars['tab_has_editable_fields']->value) {?>
                    <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_delete_submissions'] == "yes") {?>
                    <input type="button" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_delete'];?>
" class="red"
                           onclick="return ms.delete_submission(<?php echo $_smarty_tpl->tpl_vars['submission_id']->value;?>
, 'index.php')"/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "yes" && $_smarty_tpl->tpl_vars['form_info']->value['is_active'] == "yes") {?>
                    <span class="button_separator">|</span>
                    <input type="button" value="<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['form_info']->value['add_submission_button_label'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>"
                           onclick="window.location='index.php?form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&add_submission'"/>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_copy_submissions'] == "yes") {?>
                    <?php if (!($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "yes" && $_smarty_tpl->tpl_vars['form_info']->value['is_active'] == "yes")) {?>
                    <span class="button_separator">|</span>
                    <?php }?>
                    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_copy'];?>
"
                           onclick="window.location='?form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&amp;copy_submission=<?php echo $_smarty_tpl->tpl_vars['submission_id']->value;?>
'" />
                <?php }?>

            </div>

        <?php }?>
    </form>

    <?php if (count($_smarty_tpl->tpl_vars['tabs']->value) > 0) {?>
        <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_template_hook(array('location'=>"client_edit_submission_bottom"),$_smarty_tpl);?>

</div>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>


<?php }
}
