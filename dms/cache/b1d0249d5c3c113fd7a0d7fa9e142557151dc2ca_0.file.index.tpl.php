<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:14:56
  from "/home/mobatxik/public_html/dms/themes/default/clients/forms/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299c50be5585_96519670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d0249d5c3c113fd7a0d7fa9e142557151dc2ca' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/clients/forms/index.tpl',
      1 => 1573345306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299c50be5585_96519670 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_views_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.views_dropdown.php';
if (!is_callable('smarty_function_form_view_fields_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.form_view_fields_dropdown.php';
if (!is_callable('smarty_function_submission_listing_quicklinks')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.submission_listing_quicklinks.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_display_custom_field')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.display_custom_field.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td width="45"><a href="../"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_forms.gif" border="0" width="34" height="34"/></a>
        </td>
        <td class="title"><?php echo $_smarty_tpl->tpl_vars['form_info']->value['form_name'];?>
</td>
        <td align="right" valign="top">
            <?php echo smarty_function_views_dropdown(array('grouped_views'=>$_smarty_tpl->tpl_vars['grouped_views']->value,'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'selected'=>$_smarty_tpl->tpl_vars['view_id']->value,'onchange'=>"window.location='".((string)$_smarty_tpl->tpl_vars['same_page']->value)."?form_id=".((string)$_smarty_tpl->tpl_vars['form_id']->value)."&page=1&view_id=' + this.value",'open_html'=>'<div class="views_dropdown">','close_html'=>'</div>','hide_single_view'=>true),$_smarty_tpl);?>

        </td>
    </tr>
</table>


<?php if ($_smarty_tpl->tpl_vars['total_form_submissions']->value == 0) {?>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_submissions_found'];?>

    </p>
    <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "yes" && $_smarty_tpl->tpl_vars['form_info']->value['is_active'] == "yes") {?>
        <input type="button" id="add_submission" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add'];?>
"
               onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?add_submission'"/>
    <?php }?>

<?php } elseif (count($_smarty_tpl->tpl_vars['view_info']->value['columns']) == 0) {?>
    <div class="notify margin_top_large">
        <div style="padding: 8px">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_view_missing_columns'];?>

        </div>
    </div>
<?php } else { ?>

    <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['has_searchable_field']->value) {?>
        <div id="search_form">

            <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" name="search_form" onsubmit="return rsv.validate(this, rules)">
                <input type="hidden" name="search" value="1"/>
                <input type="hidden" name="select_all" value="<?php if ($_smarty_tpl->tpl_vars['curr_view_select_all']->value == "yes") {?>1<?php }?>"/>

                <table cellspacing="0" cellpadding="0" id="search_form_table">
                    <tr>
                        <td class="blue" width="70"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_search'];?>
</td>
                        <td>
                            <table cellspacing="2" cellpadding="0">
                                <tr>
                                    <td>
                                        <?php echo smarty_function_form_view_fields_dropdown(array('name_id'=>"search_field",'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'view_id'=>$_smarty_tpl->tpl_vars['view_id']->value,'blank_option_value'=>"all",'blank_option_text'=>$_smarty_tpl->tpl_vars['LANG']->value['phrase_all_fields'],'default'=>$_smarty_tpl->tpl_vars['curr_search_fields']->value['search_field'],'field_types'=>$_smarty_tpl->tpl_vars['field_types']->value),$_smarty_tpl);?>

                                    </td>
                                    <td>
                                        <div id="search_dropdown_section" style="display: none">
                                            <input type="text" name="search_date" id="search_date"
                                                   value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['curr_search_fields']->value['search_date'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_date_field_search_value']->value : $tmp);?>
"/>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <input type="text" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['phrase_search_keyword'], ENT_QUOTES, 'UTF-8', true);?>
" name="search_keyword"
                                   id="search_keyword"
                                   class="search_keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curr_search_fields']->value['search_keyword'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </td>
                        <td>
                            <input type="submit" name="search" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_search'];?>
"/>
                            <input type="button" name="" onclick="window.location='index.php?page=1&reset=1'"
                                    <?php if ($_smarty_tpl->tpl_vars['search_num_results']->value < $_smarty_tpl->tpl_vars['view_num_results']->value) {?>
                                        class="bold" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
 (<?php echo $_smarty_tpl->tpl_vars['view_num_results']->value;?>
)"
                                    <?php } else { ?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
"
                                    <?php }?> />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    <?php }?>

    <?php echo smarty_function_submission_listing_quicklinks(array('context'=>"client"),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>


    <?php if ($_smarty_tpl->tpl_vars['search_num_results']->value == 0) {?>
        <div class="notify yellow_bg margin_bottom_large">
            <div style="padding:8px">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_search_results'];?>

            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "yes" && $_smarty_tpl->tpl_vars['form_info']->value['is_active'] == "yes") {?>
            <input type="button" id="add_submission" value="<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['form_info']->value['add_submission_button_label'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>"
                   onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?add_submission'"/>
        <?php }?>

    <?php } else { ?>
        <form name="current_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">

            <?php echo smarty_function_template_hook(array('location'=>"client_submission_listings_top"),$_smarty_tpl);?>


            <table class="list_table submissions_table" id="submissions_table" cellpadding="1" cellspacing="1"
                   border="0" width="650">
                <tr>
                    <th align="center" width="25"></th>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_fields']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['is_sortable'] == "yes") {?>
                            <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['order']->value == ($_smarty_tpl->tpl_vars['i']->value['col_name']).('-DESC')) {?>
                                <?php $_smarty_tpl->_assignInScope('order_col', "&order=".((string)$_smarty_tpl->tpl_vars['i']->value['col_name'])."-ASC");
?>
                                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value == ($_smarty_tpl->tpl_vars['i']->value['col_name']).('-ASC')) {?>
                                <?php $_smarty_tpl->_assignInScope('order_col', "&order=".((string)$_smarty_tpl->tpl_vars['i']->value['col_name'])."-DESC");
?>
                                <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('order_col', "&order=".((string)$_smarty_tpl->tpl_vars['i']->value['col_name'])."-ASC");
?>
                            <?php }?>
                            <th<?php if ($_smarty_tpl->tpl_vars['i']->value['custom_width']) {?> width="<?php echo $_smarty_tpl->tpl_vars['i']->value['custom_width'];?>
"<?php }?>
                                    class="sortable_col <?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?>over<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['pass_along_str']->value;
echo $_smarty_tpl->tpl_vars['order_col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['field_title'];?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
                            </th>
                        <?php } else { ?>
                            <th<?php if ($_smarty_tpl->tpl_vars['i']->value['custom_width']) {?> width="<?php echo $_smarty_tpl->tpl_vars['i']->value['custom_width'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['field_title'];?>
</th>
                        <?php }?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <th class="edit"></th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_rows']->value, 'search_row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['search_row']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('submission_id', $_smarty_tpl->tpl_vars['search_row']->value['submission_id']);
?>
                    <?php $_smarty_tpl->_assignInScope('precheck', '');
?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['submission_id']->value,$_smarty_tpl->tpl_vars['preselected_subids']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('precheck', "checked");
?>
                    <?php }?>
                    <tr class="unselected_row_color">
                        <td align="center"><input type="checkbox" class="select_row_cb" name="submissions[]"
                                                  value="<?php echo $_smarty_tpl->tpl_vars['submission_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['precheck']->value;?>
 /></td>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_fields']->value, 'curr_field', false, 'k2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['curr_field']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('col_name', $_smarty_tpl->tpl_vars['curr_field']->value['col_name']);
?>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['curr_field']->value['truncate'] == "truncate" && $_smarty_tpl->tpl_vars['curr_field']->value['custom_width']) {?>
                                <div class="truncate" style="width:<?php echo $_smarty_tpl->tpl_vars['curr_field']->value['custom_width'];?>
px">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['curr_field']->value['truncate'] == "truncate") {?>
                                    <div class="truncate_no_fixed_width">
                                        <?php }?>
                                        <?php echo smarty_function_display_custom_field(array('form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'view_id'=>$_smarty_tpl->tpl_vars['view_id']->value,'submission_id'=>$_smarty_tpl->tpl_vars['submission_id']->value,'value'=>$_smarty_tpl->tpl_vars['search_row']->value[$_smarty_tpl->tpl_vars['col_name']->value],'field_info'=>$_smarty_tpl->tpl_vars['curr_field']->value,'field_types'=>$_smarty_tpl->tpl_vars['field_types']->value,'settings'=>$_smarty_tpl->tpl_vars['settings']->value,'context'=>"submission_listing"),$_smarty_tpl);?>

                                        <?php if ($_smarty_tpl->tpl_vars['curr_field']->value['truncate'] == "truncate") {?>
                                    </div>
                                    <?php }?>
                            </td>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <td class="edit"><a
                                    href="edit_submission.php?form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
&submission_id=<?php echo $_smarty_tpl->tpl_vars['submission_id']->value;?>
"
                                    title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_edit'];?>
"></a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </table>

            <div style="padding-top: 5px; padding-bottom: 5px;">
                <div style="float:right; padding:1px" id="display_num_selected_rows"
                        <?php if (count($_smarty_tpl->tpl_vars['preselected_subids']->value) == 0) {?>
                    class="light_grey"
                        <?php } else { ?>
                    class="green"
                        <?php }?>>
                    <?php echo count($_smarty_tpl->tpl_vars['preselected_subids']->value);?>

                </div>

                <?php echo smarty_function_template_hook(array('location'=>"client_submission_listings_buttons1"),$_smarty_tpl);?>


                <input type="button" id="select_button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_select_all_on_page'];?>
"
                       onclick="ms.select_all_on_page();"/>
                <input type="button" id="unselect_button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_unselect_all'];?>
"
                       onclick="ms.unselect_all()"/>

                <span class="button_separator">|</span>

                <?php echo smarty_function_template_hook(array('location'=>"client_submission_listings_buttons2"),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_delete_submissions'] == "yes") {?>
                    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_delete'];?>
" class="red" onclick="ms.delete_submissions()"/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_add_submissions'] == "yes" && $_smarty_tpl->tpl_vars['form_info']->value['is_active'] == "yes") {?>
                    <input type="button" id="add_submission" value="<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['form_info']->value['add_submission_button_label'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>"
                           onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?add_submission'"/>
                <?php }?>

                <?php echo smarty_function_template_hook(array('location'=>"client_submission_listings_buttons3"),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['view_info']->value['may_copy_submissions'] == "yes") {?>
                    <input type="button" id="copy_submissions" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_copy'];?>
"
                           onclick="return ms.copy_submissions()" />
                <?php }?>

                <?php echo smarty_function_template_hook(array('location'=>"client_submission_listings_buttons4"),$_smarty_tpl);?>

            </div>

            <?php echo smarty_function_template_hook(array('location'=>"client_submission_listings_bottom"),$_smarty_tpl);?>


        </form>
    <?php }?>

<?php }?>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
