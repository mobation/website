<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:24:03
  from "/home/mobatxik/public_html/dms/modules/swift_mailer/templates/tab_test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299e73dfaa60_62045197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8610f0f54517232a1560f0306a5d5c23e58720c' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/swift_mailer/templates/tab_test.tpl',
      1 => 1573345312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299e73dfaa60_62045197 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_test_desc'];?>

</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" onsubmit="return rsv.validate(this, rules)">

    <table cellpadding="0" cellspacing="1">
    <tr>
        <td class="medium_grey" width="120"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_recipient_email'];?>
</td>
        <td><input type="text" name="recipient_email" style="width:200px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recipient_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
    </tr>
    <tr>
        <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_from_email'];?>
</td>
        <td><input type="text" name="from_email" style="width:200px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['from_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
    </tr>
    </table>

    <p>
        <input type="radio" name="test_email_format" value="text" id="ex1" <?php if ($_smarty_tpl->tpl_vars['test_email_format']->value == "text") {?>checked<?php }?> />
        <label for="ex1"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_plain_text_email'];?>
</label><br />
        <input type="radio" name="test_email_format" value="html" id="ex2" <?php if ($_smarty_tpl->tpl_vars['test_email_format']->value == "html") {?>checked<?php }?> />
        <label for="ex2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_html_email'];?>
</label><br />
        <input type="radio" name="test_email_format" value="multipart" id="ex3" <?php if ($_smarty_tpl->tpl_vars['test_email_format']->value == "multipart") {?>checked<?php }?> />
        <label for="ex3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_multipart_email'];?>
</label>
    </p>

    <p>
        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_send_test_email'];?>
" />
    </p>

</form>
<?php }
}
