<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:06:35
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_appearance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a5be6cd66_49991194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a55bc2e14f31e74833c963c87fa246818c2ac4b2' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_appearance.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../no_internet_connection.tpl' => 1,
  ),
),false)) {
function content_5e299a5be6cd66_49991194 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_chart_date_range')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.chart_date_range.php';
if (!is_callable('smarty_function_colour_dropdown')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.colour_dropdown.php';
if (!is_callable('smarty_function_line_width_dropdown')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.line_width_dropdown.php';
echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
    <input type="hidden" id="page_type" value="edit"/>
    <input type="hidden" id="has_submissions_in_view" value="<?php echo $_smarty_tpl->tpl_vars['has_submissions_in_view']->value;?>
"/>
    <input type="hidden" name="vis_id" id="vis_id" value="<?php echo $_smarty_tpl->tpl_vars['vis_info']->value['vis_id'];?>
"/>
    <input type="hidden" name="form_id" id="form_id" value="<?php echo $_smarty_tpl->tpl_vars['vis_info']->value['form_id'];?>
"/>
    <input type="hidden" name="view_id" id="view_id" value="<?php echo $_smarty_tpl->tpl_vars['vis_info']->value['view_id'];?>
"/>
    <input type="hidden" name="vis_name" id="vis_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vis_info']->value['vis_name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
    <input type="hidden" name="tab" value="appearance"/>

    <div class="notify margin_bottom_large" style="display:none" id="no_data_message">
        <div style="padding: 6px">
            <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['view_id']) {?>
                <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_no_submissions_in_form_view'];?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_no_submissions_in_form'];?>

            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['L']->value['text_examples_contain_dud_data'];?>

        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../../no_internet_connection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td valign="top">

                <div class="subtitle underline margin_bottom_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['word_appearance'], 'UTF-8');?>
</div>

                <table cellspacing="0" cellpadding="1" class="list_table margin_bottom_large">
                    <tr>
                        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_date_range_to_display'];?>
</td>
                        <td>
                            <?php echo smarty_function_chart_date_range(array('name_id'=>"date_range",'default'=>$_smarty_tpl->tpl_vars['vis_info']->value['date_range']),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr>
                        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_group_submission_count_by'];?>
</td>
                        <td>
                            <input type="radio" name="submission_count_group" id="scd1" value="month"
                                   <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['submission_count_group'] == "month") {?>checked<?php }?> />
                            <label for="scd1"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_month'];?>
</label>
                            <input type="radio" name="submission_count_group" id="scd3" value="day"
                                   <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['submission_count_group'] == "day") {?>checked<?php }?> />
                            <label for="scd3"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_day'];?>
</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_chart_type'];?>
</td>
                        <td>
                            <input type="radio" name="chart_type" id="lc1" value="line_chart"
                                   <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['chart_type'] == "line_chart") {?>checked<?php }?> />
                            <label for="lc1"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_line_chart'];?>
</label>
                            <input type="radio" name="chart_type" id="lc2" value="area_chart"
                                   <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['chart_type'] == "area_chart") {?>checked<?php }?> />
                            <label for="lc2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_area_chart'];?>
</label>
                            <input type="radio" name="chart_type" id="lc3" value="column_chart"
                                   <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['chart_type'] == "column_chart") {?>checked<?php }?> />
                            <label for="lc3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_column_chart'];?>
</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_colour'];?>
</td>
                        <td>
                            <?php echo smarty_function_colour_dropdown(array('name_id'=>"colour",'default'=>$_smarty_tpl->tpl_vars['vis_info']->value['colour']),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr>
                        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_line_width'];?>
</td>
                        <td>
                            <?php echo smarty_function_line_width_dropdown(array('name_id'=>"line_width",'default'=>$_smarty_tpl->tpl_vars['vis_info']->value['line_width']),$_smarty_tpl);?>
 px
                            <div class="hint"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_line_area_only'];?>
</div>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="250" valign="top">
                <div class="subtitle underline margin_bottom_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['word_thumbnail'], 'UTF-8');?>
</div>
                <div id="thumb_chart">
                    <div class="loading"></div>
                </div>
            </td>
        </tr>
    </table>

    <div class="subtitle underline margin_bottom_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_full_size'], 'UTF-8');?>
</div>
    <div id="full_size_chart">
        <div class="loading"></div>
    </div>

    <p>
        <input type="button" id="delete_visualization" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_delete_visualization'];?>
" class="burgundy right"/>
        <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
    </p>

</form>
<?php }
}
