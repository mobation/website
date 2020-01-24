<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:39:38
  from "/home/mobatxik/public_html/dms/modules/pages/templates/page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e29a21accb467_63081797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7906cf3d6af083be8e4b0893700a0998fff45be' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/pages/templates/page.tpl',
      1 => 1573345312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29a21accb467_63081797 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>"header.tpl"),$_smarty_tpl);?>


  <?php if ($_smarty_tpl->tpl_vars['account_type']->value == "admin") {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/modules/pages/edit.php?page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
" style="float:right" title="<?php echo $_smarty_tpl->tpl_vars['phrase_edit_page']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/admin_edit.png" border="0" /></a>
  <?php }?>

  <div class="title margin_bottom_large"><?php echo $_smarty_tpl->tpl_vars['page_info']->value['heading'];?>
</div>

  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


<?php echo smarty_function_ft_include(array('file'=>"footer.tpl"),$_smarty_tpl);?>

<?php }
}
