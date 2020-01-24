<?php
/* Smarty version 3.1.31, created on 2020-01-22 22:35:12
  from "C:\xampp\htdocs\formtools\themes\default\admin\forms\edit\tab_edit_email_tab3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e28c010edd657_72881495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fed352bc265b39d9817a9f1665dd24c00cefd80d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\formtools\\themes\\default\\admin\\forms\\edit\\tab_edit_email_tab3.tpl',
      1 => 1573338106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e28c010edd657_72881495 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_email_patterns_dropdown')) require_once 'C:\\xampp\\htdocs\\formtools\\global\\smarty_plugins\\function.email_patterns_dropdown.php';
?>
  <div class="margin_top margin_bottom_large">
    <div class="placeholders_section">
      <img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/placeholders.png" />
      <span class="placeholders_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_view_placeholders'];?>
</span>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_email_template_tab'];?>

  </div>

  <table cellpadding="0" cellspacing="1" style="padding-bottom: 5px; width:100%">
  <tr>
    <td class="bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_html_template'];?>
</td>
    <td class="no_wrap" align="right">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_examples_c'];?>

      <?php echo smarty_function_email_patterns_dropdown(array('type'=>"html",'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'onchange'=>"emails_ns.select_template('html', this.value)"),$_smarty_tpl);?>

    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div style="border: 1px solid #666666; padding: 3px">
        <textarea id="html_template" name="html_template" style="width: 100%; height: 300px"><?php echo $_smarty_tpl->tpl_vars['template_info']->value['html_template'];?>
</textarea>
      </div>
      <?php echo '<script'; ?>
>
        var html_editor = new CodeMirror.fromTextArea($("#html_template")[0], {
          lineWrapping: true,
          mode: {
            name: "smarty",
            baseMode: "text/html",
            version: 3
          }
        });
      <?php echo '</script'; ?>
>
    </td>
  </tr>
  <tr>
    <td class="bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_text_template'];?>
</td>
    <td class="no_wrap" align="right">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_examples_c'];?>

      <?php echo smarty_function_email_patterns_dropdown(array('type'=>"text",'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'onchange'=>"emails_ns.select_template('text', this.value)"),$_smarty_tpl);?>

    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div style="border: 1px solid #666666; padding: 3px">
        <textarea id="text_template" name="text_template" style="width: 100%; height: 300px"><?php echo $_smarty_tpl->tpl_vars['template_info']->value['text_template'];?>
</textarea>
      </div>
      <?php echo '<script'; ?>
>
        var text_editor = new CodeMirror.fromTextArea($("#text_template")[0], {
          lineWrapping: true,
          mode: {
            name: "smarty",
            baseMode: "text/html",
            version: 3
          }
        });
      <?php echo '</script'; ?>
>
    </td>
  </tr>
  </table>
<?php }
}
