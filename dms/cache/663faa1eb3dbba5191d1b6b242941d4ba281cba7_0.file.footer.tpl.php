<?php
/* Smarty version 3.1.31, created on 2020-01-22 20:32:41
  from "C:\xampp\htdocs\formtools\themes\default\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e28a359e73538_96375069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663faa1eb3dbba5191d1b6b242941d4ba281cba7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\formtools\\themes\\default\\footer.tpl',
      1 => 1573338106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e28a359e73538_96375069 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once 'C:\\xampp\\htdocs\\formtools\\global\\smarty_plugins\\function.show_page_load_time.php';
?>

      </div>
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
