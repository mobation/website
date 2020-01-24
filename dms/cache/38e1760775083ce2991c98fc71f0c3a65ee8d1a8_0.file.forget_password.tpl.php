<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:05:46
  from "/home/mobatxik/public_html/dms/themes/default/forget_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a2a8b07b5_70856940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e1760775083ce2991c98fc71f0c3a65ee8d1a8' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/forget_password.tpl',
      1 => 1573345306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299a2a8b07b5_70856940 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>"header.tpl"),$_smarty_tpl);?>


  <div class="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_forgot_password'];?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <div class="margin_bottom_large" style="width: 540px">
    <?php echo $_smarty_tpl->tpl_vars['text_forgot_password']->value;?>

  </div>

  <form name="forget_password" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post"
    onsubmit="return rsv.validate(this, rules)">

    <div class="login_panel">
      <div class="login_panel_inner">
        <table cellpadding="0" cellspacing="1">
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_username'];?>
</td>
          <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" /></td>
          <td><input type="submit" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_email'], 'UTF-8');?>
" class="margin_left_large margin_right_large" /></td>
        </tr>
        </table>
        <div class="clear"></div>
      </div>
    </div>
  </form>

  <p>
    <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_login_panel_leftarrows'];?>
</a>
  </p>

  <noscript>
    <div class="error" style="padding:6px;">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_js_required'];?>

    </div>
  </noscript>

<?php echo smarty_function_ft_include(array('file'=>"footer.tpl"),$_smarty_tpl);?>

<?php }
}
