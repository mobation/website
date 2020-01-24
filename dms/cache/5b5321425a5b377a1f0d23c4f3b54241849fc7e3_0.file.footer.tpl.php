<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:54:16
  from "/home/mobatxik/public_html/dms/themes/classicgrey/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e29a588cead80_73372672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b5321425a5b377a1f0d23c4f3b54241849fc7e3' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/classicgrey/footer.tpl',
      1 => 1573345322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29a588cead80_73372672 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.show_page_load_time.php';
?>
              </div>
            </div>
          </div>
        </div>

        <div id="left" class="pad_top_large">
            <?php echo smarty_function_ft_include(array('file'=>"menu.tpl"),$_smarty_tpl);?>

        </div>
      </div>

      <div class="clear"></div>

    </div>
  </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div id="footer">
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['footer_text']->value)===null||$tmp==='' ? '' : $tmp);?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
