<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:06:08
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a4019b647_40178116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd44760cb388f5a8e31336517c7da8c13a27ca047' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/index.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../no_internet_connection.tpl' => 1,
  ),
),false)) {
function content_5e299a4019b647_40178116 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_forms_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.forms_dropdown.php';
if (!is_callable('smarty_function_views_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.views_dropdown.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.clients_dropdown.php';
if (!is_callable('smarty_function_display_form_name')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.display_form_name.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0">
    <tr>
        <td width="45"><a href="index.php"><img src="images/icon_visualization.png" border="0" width="34" height="34"/></a>
        </td>
        <td class="title">
            <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
            <span class="joiner">&raquo;</span>
            <?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>

        </td>
    </tr>
</table>

<?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("file:../no_internet_connection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['total_results']->value == 0) {?>
    <div class="notify" class="margin_bottom_large">
        <div style="padding:8px">
            <?php echo $_smarty_tpl->tpl_vars['L']->value['text_no_visualizations'];?>

        </div>
    </div>
<?php } else { ?>
    <div id="search_form" class=" margin_bottom_large">
        <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
            <table cellspacing="2" cellpadding="0" id="search_form_table" width="100%">
                <tr>
                    <td width="100" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_search_string'];?>
</td>
                    <td width="280" class="col2"><input type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
"/></td>
                    <td width="120" class="medium_grey" valign="top" rowspan="2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_visualization_type'];?>
</td>
                    <td rowspan="2" valign="top">
                        <input type="checkbox" name="vis_types[]" id="vt1" value="activity"
                               <?php if (in_array("activity",$_smarty_tpl->tpl_vars['vis_types']->value)) {?>checked<?php }?> />
                        <label for="vt1"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_activity_charts'];?>
</label><br/>
                        <input type="checkbox" name="vis_types[]" id="vt2" value="field"
                               <?php if (in_array("field",$_smarty_tpl->tpl_vars['vis_types']->value)) {?>checked<?php }?> />
                        <label for="vt2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_charts'];?>
</label>
                    </td>
                </tr>
                <tr>
                    <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_form'];?>
</td>
                    <td class="col2"><?php echo smarty_function_forms_dropdown(array('name_id'=>"dv_search_form_id",'default'=>$_smarty_tpl->tpl_vars['search_form_id']->value,'include_blank_option'=>true,'blank_option_label'=>$_smarty_tpl->tpl_vars['L']->value['phrase_all_forms']),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_view'];?>
</td>
                    <td class="col2">
                        <?php if ($_smarty_tpl->tpl_vars['search_form_id']->value) {?>
                            <?php echo smarty_function_views_dropdown(array('form_id'=>$_smarty_tpl->tpl_vars['search_form_id']->value,'name_id'=>"dv_search_view_id",'selected'=>$_smarty_tpl->tpl_vars['search_view_id']->value,'show_empty_label'=>true,'empty_label'=>$_smarty_tpl->tpl_vars['L']->value['phrase_all_views']),$_smarty_tpl);?>

                        <?php } else { ?>
                            <select name="view_id" id="view_id" disabled="disabled">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_all_views'];?>
</option>
                            </select>
                        <?php }?>
                    </td>
                    <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_chart_type'];?>
</td>
                    <td>
                        <select name="dv_search_chart_type">
                            <option value="" <?php if ($_smarty_tpl->tpl_vars['chart_type']->value == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_all_types'];?>
</option>
                            <option value="area_chart"
                                    <?php if ($_smarty_tpl->tpl_vars['chart_type']->value == "area_chart") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['word_area'];?>
</option>
                            <option value="bar_chart"
                                    <?php if ($_smarty_tpl->tpl_vars['chart_type']->value == "bar_chart") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['word_bar'];?>
</option>
                            <option value="column_chart"
                                    <?php if ($_smarty_tpl->tpl_vars['chart_type']->value == "column_chart") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['word_column'];?>
</option>
                            <option value="line_chart"
                                    <?php if ($_smarty_tpl->tpl_vars['chart_type']->value == "line_chart") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['word_line'];?>
</option>
                            <option value="pie_chart"
                                    <?php if ($_smarty_tpl->tpl_vars['chart_type']->value == "pie_chart") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['word_pie'];?>
</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="medium_grey" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_accounts'];?>
</td>
                    <td colspan="2">

                        <table>
                            <tr>
                                <td>
                                    <input type="radio" name="account_type" value="admin" id="at1"
                                           <?php if ($_smarty_tpl->tpl_vars['account_type']->value == "admin") {?>checked<?php }?> /> <label
                                            for="at1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_administrator'];?>
</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="account_type" value="client" id="at2"
                                           <?php if ($_smarty_tpl->tpl_vars['account_type']->value == "client") {?>checked<?php }?> /> <label
                                            for="at2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_clients'];?>
</label>
                                    <?php echo smarty_function_clients_dropdown(array('name_id'=>"client_id",'default'=>$_smarty_tpl->tpl_vars['client_id']->value,'include_blank_option'=>true,'blank_option'=>$_smarty_tpl->tpl_vars['L']->value['phrase_all_accounts']),$_smarty_tpl);?>

                                </td>
                            </tr>
                        </table>

                    </td>
                    <td align="right" valign="bottom">
                        <input type="submit" name="search" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_search'];?>
" class="margin_left"/>
                        <input type="button" name="reset" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?reset=1'"
                                <?php if (count($_smarty_tpl->tpl_vars['results']->value) < $_smarty_tpl->tpl_vars['total_results']->value) {?>
                                    value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
 (<?php echo $_smarty_tpl->tpl_vars['total_results']->value;?>
)" class="bold"
                                <?php } else { ?>
                                    value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
" class="light_grey" disabled
                                <?php }?> />
                    </td>
                </tr>
            </table>

        </form>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['results']->value) == 0) {?>
        <div class="notify" class="margin_bottom_large">
            <div style="padding:8px">
                <?php echo $_smarty_tpl->tpl_vars['L']->value['text_no_visualization_found_in_search'];?>

            </div>
        </div>
    <?php } else { ?>

        <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>


        <?php $_smarty_tpl->_assignInScope('table_group_id', "1");
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result', false, NULL, 'row', array (
  'index' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
?>
            <?php $_smarty_tpl->_assignInScope('vis_id', $_smarty_tpl->tpl_vars['result']->value['vis_id']);
?>
            <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index'] : null));
?>
            <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>

            
            <?php if ($_smarty_tpl->tpl_vars['count']->value == 1 || $_smarty_tpl->tpl_vars['count']->value != 1 && (($_smarty_tpl->tpl_vars['count']->value-1)%$_smarty_tpl->tpl_vars['num_visualizations_per_page']->value == 0)) {?>

                <?php if ($_smarty_tpl->tpl_vars['table_group_id']->value == "1") {?>
                    <?php $_smarty_tpl->_assignInScope('style', "display: block");
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('style', "display: none");
?>
                <?php }?>

                <div id="page_<?php echo $_smarty_tpl->tpl_vars['table_group_id']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">

                <table class="list_table" style="width:100%" cellpadding="1" cellspacing="1">
                <tr style="height: 20px;">
                    <th><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_visualization_name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_form'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_permissions'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_visualization_type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_chart_type'];?>
</th>
                    <th class="edit"></th>
                    <th class="del"></th>
                </tr>
            <?php }?>
            <tr>
                <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['result']->value['vis_name'];?>
</td>
                <td class="pad_left_small">
                    <?php if ($_smarty_tpl->tpl_vars['result']->value['view_id']) {?>
                        <a href="../../admin/forms/submissions.php?form_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['form_id'];?>
&view_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['view_id'];?>
"><?php echo smarty_function_display_form_name(array('form_id'=>$_smarty_tpl->tpl_vars['result']->value['form_id']),$_smarty_tpl);?>
</a>
                    <?php } else { ?>
                        <a href="../../admin/forms/submissions.php?form_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['form_id'];?>
"><?php echo smarty_function_display_form_name(array('form_id'=>$_smarty_tpl->tpl_vars['result']->value['form_id']),$_smarty_tpl);?>
</a>
                    <?php }?>
                </td>
                <td class="pad_left_small">
                    <?php if ($_smarty_tpl->tpl_vars['result']->value['access_type'] == "admin") {?>
                        <span class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_admin_only'];?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['access_type'] == "public") {?>
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_public'];?>
</span>
                    <?php } else { ?>
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_private'];?>
</span>
                    <?php }?>
                </td>
                <td class="pad_left_small">
                    <?php if ($_smarty_tpl->tpl_vars['result']->value['vis_type'] == "activity") {?>
                        <span class="blue"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_activity_charts'];?>
</span>
                    <?php } else { ?>
                        <span class="purple"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_chart'];?>
</span>
                    <?php }?>
                </td>
                <td class="pad_left_small">
                    <?php if ($_smarty_tpl->tpl_vars['result']->value['chart_type'] == "area_chart") {?>
                        <?php echo $_smarty_tpl->tpl_vars['L']->value['word_area'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['chart_type'] == "line_chart") {?>
                        <?php echo $_smarty_tpl->tpl_vars['L']->value['word_line'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['chart_type'] == "column_chart") {?>
                        <?php echo $_smarty_tpl->tpl_vars['L']->value['word_column'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['chart_type'] == "bar_chart") {?>
                        <?php echo $_smarty_tpl->tpl_vars['L']->value['word_bar'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['chart_type'] == "pie_chart") {?>
                        <?php echo $_smarty_tpl->tpl_vars['L']->value['word_pie'];?>

                    <?php }?>
                </td>
                <td class="edit">
                    <?php if ($_smarty_tpl->tpl_vars['result']->value['vis_type'] == "activity") {?>
                        <a href="activity_charts/edit.php?vis_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['vis_id'];?>
"></a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['vis_type'] == "field") {?>
                        <a href="field_charts/edit.php?vis_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['vis_id'];?>
"></a>
                    <?php }?>
                </td>
                <td class="del"><a href="#" onclick="return vis_ns.delete_visualization(<?php echo $_smarty_tpl->tpl_vars['result']->value['vis_id'];?>
)"></a></td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['count']->value != 1 && ($_smarty_tpl->tpl_vars['count']->value%$_smarty_tpl->tpl_vars['num_visualizations_per_page']->value) == 0) {?>
                </table></div>
                <?php $_smarty_tpl->_assignInScope('table_group_id', $_smarty_tpl->tpl_vars['table_group_id']->value+1);
?>
            <?php }?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        
        <?php if ((count($_smarty_tpl->tpl_vars['results']->value)%$_smarty_tpl->tpl_vars['num_visualizations_per_page']->value) != 0) {?>
            </table></div>
        <?php }?>

    <?php }
}?>

<p>
    <input type="button" id="create_visualization" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_create_new_visualization'];?>
"/>
    <?php if (count($_smarty_tpl->tpl_vars['results']->value) > 0) {?>
        <input type="button" id="view_visualizations" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_view_visualizations'];?>
"/>
    <?php }?>
</p>
</form>

<div class="hidden" id="create_visualization_dialog">
    <ul>
        <li>
            <div class="chart_type">
                <div class="dv_create_visualization_heading"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_activity_chart'];?>
</div>
                <img src="images/example_area_chart.png"/>
                <input type="hidden" class="visualization_type" value="activity_chart"/>
            </div>
            <div class="comment">
                <?php echo $_smarty_tpl->tpl_vars['L']->value['text_activity_chart_desc'];?>

            </div>
        </li>
        <li>
            <div class="chart_type">
                <div class="dv_create_visualization_heading"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_field_chart'];?>
</div>
                <img src="images/example_pie_chart.png"/>
                <input type="hidden" class="visualization_type" value="field_chart"/>
            </div>
            <div class="comment">
                <?php echo $_smarty_tpl->tpl_vars['L']->value['text_field_chart_desc'];?>

            </div>
        </li>
    </ul>
</div>

<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
