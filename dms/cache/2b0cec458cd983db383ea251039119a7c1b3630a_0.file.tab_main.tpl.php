<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:05:08
  from "/home/mobatxik/public_html/dms/themes/default/clients/account/tab_main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a04d35192_21003726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b0cec458cd983db383ea251039119a7c1b3630a' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/clients/account/tab_main.tpl',
      1 => 1573345306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299a04d35192_21003726 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.template_hook.php';
?>
  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <form method="post" name="login_info" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return rsv.validate(this, rules)">

    <?php echo smarty_function_template_hook(array('location'=>"edit_client_main_top"),$_smarty_tpl);?>


    <table class="list_table" cellpadding="0" cellspacing="1">
    <tr>
      <td width="15" class="red" align="center">*</td>
      <td width="180" class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</td>
      <td><input type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['first_name'];?>
" size="25" /></td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_name'];?>
</td>
      <td><input type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['last_name'];?>
" size="25" /></td>
    </tr>
    <tr>
      <td class="red" align="center">*</td>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</td>
      <td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['email'];?>
" size="40" /></td>
    </tr>
    <tr>
      <td class="red" align="center"> </td>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_company_name'];?>
</td>
      <td><input type="text" name="company_name" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['settings']['company_name'];?>
" size="40" /></td>
    </tr>
    </table>

    <?php echo smarty_function_template_hook(array('location'=>"edit_client_main_middle"),$_smarty_tpl);?>


    <p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_change_login_info'];?>
</p>

	  <?php if ($_smarty_tpl->tpl_vars['has_extra_password_requirements']->value) {?>
	  <div class="grey_box margin_bottom_large">
	    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_password_requirements_c'];?>

	    <ul class="margin_bottom_small margin_top_small">
	      <?php if ($_smarty_tpl->tpl_vars['has_min_password_length']->value) {?><li><?php echo $_smarty_tpl->tpl_vars['phrase_password_min']->value;?>
</li><?php }?>
	      <?php if (in_array("uppercase",$_smarty_tpl->tpl_vars['required_password_chars']->value)) {?><li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_password_one_uppercase'];?>
</li><?php }?>
	      <?php if (in_array("number",$_smarty_tpl->tpl_vars['required_password_chars']->value)) {?><li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_password_one_number'];?>
</li><?php }?>
	      <?php if (in_array("special_char",$_smarty_tpl->tpl_vars['required_password_chars']->value)) {?><li><?php echo $_smarty_tpl->tpl_vars['password_special_char']->value;?>
</li><?php }?>
	    </ul>
	  </div>
	  <?php }?>

    <table class="list_table" cellpadding="0" cellspacing="1">
    <tr>
      <td width="15" class="red" align="center">*</td>
      <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_username'];?>
</td>
      <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['username'];?>
" size="25" /></td>
    </tr>
    <tr>
      <td class="red" align="center"> </td>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_password'];?>
</td>
      <td><input type="password" name="password" value="" size="25" /></td>
    </tr>
    <tr>
      <td class="red" align="center"> </td>
      <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_re_enter_password'];?>
</td>
      <td><input type="password" name="password_2" value="" size="25" /></td>
    </tr>
    </table>

    <?php echo smarty_function_template_hook(array('location'=>"edit_client_main_bottom"),$_smarty_tpl);?>


    <p>
      <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
    </p>

  </form>
<?php }
}
