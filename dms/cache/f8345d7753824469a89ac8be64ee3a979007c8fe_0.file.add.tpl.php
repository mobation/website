<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:06:15
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a47a47809_33608600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8345d7753824469a89ac8be64ee3a979007c8fe' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/add.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../no_internet_connection.tpl' => 1,
  ),
),false)) {
function content_5e299a47a47809_33608600 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_forms_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.forms_dropdown.php';
if (!is_callable('smarty_function_chart_date_range')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.chart_date_range.php';
if (!is_callable('smarty_function_colour_dropdown')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.colour_dropdown.php';
if (!is_callable('smarty_function_line_width_dropdown')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.line_width_dropdown.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0">
    <tr>
        <td width="45"><a href="../index.php"><img src="../images/icon_visualization.png" border="0" width="34"
                                                   height="34"/></a></td>
        <td class="title">
            <a href="../../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
            <span class="joiner">&raquo;</span>
            <a href="../"><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</a>
            <span class="joiner">&raquo;</span>
            <?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_create_new_activity_chart'];?>

        </td>
    </tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['g_message']->value) {?>

    <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>

    <div><b><?php echo $_smarty_tpl->tpl_vars['L']->value['word_actions'];?>
</b></div>
    <ul>
        <li><a href="../"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_list_visualizations'];?>
</a></li>
        <li><a href="add.php"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_create_a_new_activity_chart'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['g_success']->value) {?>
            <li><a href="edit.php?page=main&vis_id=<?php echo $_smarty_tpl->tpl_vars['vis_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_edit_the_activity_chart'];?>
</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['form_id']->value && $_smarty_tpl->tpl_vars['view_id']->value) {?>
            <li>
                <a href="../../../admin/forms/submissions.php?form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&view_id=<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_view_form_submissions'];?>
</a>
            </li>
        <?php }?>
    </ul>
<?php } else { ?>

    <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("file:../../no_internet_connection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="margin_bottom_large">
        <?php echo $_smarty_tpl->tpl_vars['L']->value['text_add_visualization'];?>

    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" onsubmit="return rsv.validate(this, rules)">
        <div class="subtitle underline margin_bottom_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_main_settings'], 'UTF-8');?>
</div>

        <table cellspacing="1" cellpadding="0" class="list_table margin_bottom_large">
            <tr>
                <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_visualization_name'];?>
</td>
                <td>
                    <input type="text" name="vis_name" id="vis_name" value="Form Activity" style="width: 99%"/>
                </td>
            </tr>
            <tr>
                <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_form'];?>
</td>
                <td>
                    <?php echo smarty_function_forms_dropdown(array('name_id'=>"form_id",'include_blank_option'=>true),$_smarty_tpl);?>

                </td>
            </tr>
        </table>

        <table cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td valign="top">

                    <div class="subtitle underline margin_bottom_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['word_appearance'], 'UTF-8');?>
</div>

                    <table cellspacing="0" cellpadding="1" class="list_table margin_bottom_large">
                        <tr>
                            <td class="pad_left_small">Date Range to display</td>
                            <td>
                                <?php echo smarty_function_chart_date_range(array('name_id'=>"date_range",'default'=>$_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_date_range']),$_smarty_tpl);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="pad_left_small">Group submission count by</td>
                            <td>
                                <input type="radio" name="submission_count_group" id="scd1" value="month"
                                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_submission_count_group'] == "month") {?>checked<?php }?> />
                                <label for="scd1"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_month'];?>
</label>
                                <input type="radio" name="submission_count_group" id="scd3" value="day"
                                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_submission_count_group'] == "day") {?>checked<?php }?> />
                                <label for="scd3"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_day'];?>
</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_chart_type'];?>
</td>
                            <td>
                                <input type="radio" name="chart_type" id="lc1" value="line_chart"
                                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_default_chart_type'] == "line_chart") {?>checked<?php }?> />
                                <label for="lc1"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_line_chart'];?>
</label>
                                <input type="radio" name="chart_type" id="lc2" value="area_chart"
                                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_default_chart_type'] == "area_chart") {?>checked<?php }?> />
                                <label for="lc2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_area_chart'];?>
</label>
                                <input type="radio" name="chart_type" id="lc3" value="column_chart"
                                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_default_chart_type'] == "column_chart") {?>checked<?php }?> />
                                <label for="lc3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_column_chart'];?>
</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_colour'];?>
</td>
                            <td>
                                <?php echo smarty_function_colour_dropdown(array('name_id'=>"colour",'default'=>$_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_colour']),$_smarty_tpl);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_line_width'];?>
</td>
                            <td>
                                
                                <?php echo smarty_function_line_width_dropdown(array('name_id'=>"line_width",'default'=>$_smarty_tpl->tpl_vars['module_settings']->value['activity_chart_line_width']),$_smarty_tpl);?>

                                px
                                <div class="hint">This is for Line and Area charts only.</div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="250" valign="top">
                    <div class="subtitle underline margin_bottom_large"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_thumbnail'];?>
</div>
                    <div id="thumb_chart"></div>
                </td>
            </tr>
        </table>

        <div class="subtitle underline margin_bottom_large"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_full_size'];?>
</div>
        <div id="full_size_chart"></div>

        <p>
            <input type="submit" name="add" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_create_visualization'];?>
"/>
        </p>

    </form>
<?php }?>

<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
