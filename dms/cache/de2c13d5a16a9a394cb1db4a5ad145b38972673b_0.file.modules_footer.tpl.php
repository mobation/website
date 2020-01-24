<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:06:08
  from "/home/mobatxik/public_html/dms/themes/default/modules_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a401c2857_46667731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de2c13d5a16a9a394cb1db4a5ad145b38972673b' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/modules_footer.tpl',
      1 => 1573345308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299a401c2857_46667731 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.show_page_load_time.php';
?>

    </td>
  </tr>
  </table>

</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div class="footer">
    <?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
