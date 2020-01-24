<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:24:52
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299ea47e4bd6_69989613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e798ab48849b0e06a8180b69074956f6211000eb' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/settings.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299ea47e4bd6_69989613 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_cache_frequency_dropdown')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.cache_frequency_dropdown.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0">
    <tr>
        <td width="45"><a href="index.php"><img src="images/icon_visualization.png" border="0" width="34" height="34"/></a>
        </td>
        <td class="title">
            <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
            <span class="joiner">&raquo;</span>
            <a href="./"><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</a>
            <span class="joiner">&raquo;</span>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_main_settings'];?>

        </td>
    </tr>
</table>

<?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_activity_chart_intro'];?>

</div>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return rsv.validate(this, rules)">
    <table cellspacing="0" cellpadding="1" class="list_table">
        <tr>
            <td width="230" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_quicklinks_dialog_default_dimensions'];?>
</td>
            <td class="pad_left_small">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="60" class="medium_grey"><label for="width"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_width'];?>
</label></td>
                        <td><input type="text" name="quicklinks_dialog_width" id="width" size="3"
                                   value="<?php echo $_smarty_tpl->tpl_vars['module_settings']->value['quicklinks_dialog_width'];?>
"/>px
                        </td>
                    </tr>
                    <tr>
                        <td class="medium_grey"><label for="height"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_height'];?>
</label></td>
                        <td><input type="text" name="quicklinks_dialog_height" id="height" size="3"
                                   value="<?php echo $_smarty_tpl->tpl_vars['module_settings']->value['quicklinks_dialog_height'];?>
"/>px
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_vis_thumb_size'];?>
</td>
            <td>
                <input type="text" name="quicklinks_dialog_thumb_size" id="quicklinks_dialog_thumb_size" size="3"
                       value="<?php echo $_smarty_tpl->tpl_vars['module_settings']->value['quicklinks_dialog_thumb_size'];?>
"/>px
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_default_cache_frequency'];?>
</td>
            <td>
                <?php echo smarty_function_cache_frequency_dropdown(array('name_id'=>"default_cache_frequency",'default'=>$_smarty_tpl->tpl_vars['module_settings']->value['default_cache_frequency']),$_smarty_tpl);?>

                <div class="hint">
                    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_cache_frequency_explanation'];?>

                </div>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_hide_visualizations_from_client_accounts'];?>
</td>
            <td>
                <input type="radio" name="hide_from_client_accounts" id="hfca1" value="yes"
                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['hide_from_client_accounts'] == "yes") {?>checked<?php }?> />
                <label for="hfca1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
                <input type="radio" name="hide_from_client_accounts" id="hfca2" value="no"
                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['hide_from_client_accounts'] == "no") {?>checked<?php }?> />
                <label for="hfca2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
            </td>
        </tr>
        <tr>
            <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_allow_clients_refresh_cache'];?>
</td>
            <td>
                <input type="radio" name="clients_may_refresh_cache" id="cmrc1" value="yes"
                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['clients_may_refresh_cache'] == "yes") {?>checked<?php }?> />
                <label for="cmrc1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
                <input type="radio" name="clients_may_refresh_cache" id="cmrc2" value="no"
                       <?php if ($_smarty_tpl->tpl_vars['module_settings']->value['clients_may_refresh_cache'] == "no") {?>checked<?php }?> />
                <label for="cmrc2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
            </td>
        </tr>
    </table>

    <p>
        <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
"/>
        <input type="submit" name="clear_cache" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_clear_visualization_cache'];?>
"/>
    </p>

</form>

<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
