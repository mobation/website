<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:06:28
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a54581329_74434801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ca873868936d87a75bf6fdcf3c19fa275fcc3c' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_main.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299a54581329_74434801 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_forms_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.forms_dropdown.php';
if (!is_callable('smarty_function_cache_frequency_dropdown')) require_once '/home/mobatxik/public_html/dms/modules/data_visualization/smarty_plugins/function.cache_frequency_dropdown.php';
?>
  <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" onsubmit="return rsv.validate(this, rules)">
    <input type="hidden" name="vis_id" value="<?php echo $_smarty_tpl->tpl_vars['vis_info']->value['vis_id'];?>
" />
    <input type="hidden" name="tab" value="main" />

    <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_main_settings'], 'UTF-8');?>
</div>

    <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


    <table cellspacing="1" cellpadding="0" class="list_table">
    <tr>
      <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_visualization_name'];?>
</td>
      <td>
        <input type="text" name="vis_name" id="vis_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vis_info']->value['vis_name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width: 99%" />
      </td>
    </tr>
    <tr>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_form'];?>
</td>
      <td>
        <?php echo smarty_function_forms_dropdown(array('name_id'=>"form_id",'include_blank_option'=>true,'default'=>$_smarty_tpl->tpl_vars['vis_info']->value['form_id']),$_smarty_tpl);?>

      </td>
    </tr>
    <tr>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_cache_update_frequency'];?>
</td>
      <td>
        <?php echo smarty_function_cache_frequency_dropdown(array('name_id'=>"cache_update_frequency",'default'=>$_smarty_tpl->tpl_vars['vis_info']->value['cache_update_frequency']),$_smarty_tpl);?>

        <div class="hint">
          <?php echo $_smarty_tpl->tpl_vars['L']->value['text_cache_frequency_explanation'];?>

        </div>
      </td>
    </tr>
    </table>

    <p>
      <input type="button" id="delete_visualization" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_delete_visualization'];?>
" class="burgundy right" />
      <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
    </p>
  </form>
<?php }
}
