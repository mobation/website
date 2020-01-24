<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:06:28
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a5456b5e3_27899888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf40464aa290856f52011610bf3b2f051a90603' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/edit.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299a5456b5e3_27899888 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="../index.php"><img src="../images/icon_visualization.png" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
      <span class="joiner">&raquo;</span>
      <a href="../"><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_edit_activity_chart'];?>

    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['page']->value == "main") {?>
      <?php echo smarty_function_ft_include(array('file'=>'../../modules/data_visualization/templates/activity_charts/tab_main.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "appearance") {?>
      <?php echo smarty_function_ft_include(array('file'=>'../../modules/data_visualization/templates/activity_charts/tab_appearance.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "permissions") {?>
      <?php echo smarty_function_ft_include(array('file'=>'../../modules/data_visualization/templates/activity_charts/tab_permissions.tpl'),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "advanced") {?>
      <?php echo smarty_function_ft_include(array('file'=>'../../modules/data_visualization/templates/activity_charts/tab_advanced.tpl'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smarty_function_ft_include(array('file'=>'../../modules/data_visualization/templates/activity_charts/tab_main.tpl'),$_smarty_tpl);?>

    <?php }?>

  <?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
