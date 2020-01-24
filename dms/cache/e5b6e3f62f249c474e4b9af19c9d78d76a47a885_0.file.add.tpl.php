<?php
/* Smarty version 3.1.31, created on 2020-01-22 23:50:25
  from "C:\xampp\htdocs\formtools\themes\default\admin\clients\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e28d1b187b7d5_27426964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b6e3f62f249c474e4b9af19c9d78d76a47a885' => 
    array (
      0 => 'C:\\xampp\\htdocs\\formtools\\themes\\default\\admin\\clients\\add.tpl',
      1 => 1573338106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e28d1b187b7d5_27426964 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once 'C:\\xampp\\htdocs\\formtools\\global\\smarty_plugins\\function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once 'C:\\xampp\\htdocs\\formtools\\global\\smarty_plugins\\function.template_hook.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_accounts.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_clients'];?>
</a> <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_client'];?>

    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <div class="pad_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_create_new_client_account'];?>

  </div>

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

  <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" id="add_client_form" method="post" autocomplete="off" onsubmit="return rsv.validate(this, rules)">

    <?php echo smarty_function_template_hook(array('location'=>"admin_add_client_top"),$_smarty_tpl);?>


    <table cellpadding="0" cellspacing="1">
    <tr>
      <td class="medium_grey" width="130"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</td>
      <td><input type="text" name="first_name" id="first_name" style="width: 150px" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['vals']->value['first_name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" /></td>
    </tr>
    <tr>
      <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_name'];?>
</td>
      <td><input type="text" name="last_name" style="width: 150px" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['vals']->value['last_name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" /></td>
    </tr>
    <tr>
      <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</td>
      <td><input type="text" name="email" style="width: 150px" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['vals']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" /></td>
    </tr>
    <tr>
      <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_username'];?>
</td>
      <td><input type="text" name="username" style="width: 100px" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['vals']->value['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" /></td>
    </tr>
    <tr>
      <td valign="top" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_password'];?>
</td>
      <td>
        <input type="password" name="password" style="width: 100px" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['vals']->value['password'])===null||$tmp==='' ? '' : $tmp);?>
" />
      </td>
    </tr>
    <tr>
      <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_re_enter_password'];?>
</td>
      <td><input type="password" name="password_2" style="width: 100px" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['vals']->value['password_2'])===null||$tmp==='' ? '' : $tmp);?>
"/></td>
    </tr>
    </table>

    <?php echo smarty_function_template_hook(array('location'=>"admin_add_client_bottom"),$_smarty_tpl);?>


    <p>
      <input type="submit" name="add_client" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_client'];?>
" />
    </p>

  </form>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
