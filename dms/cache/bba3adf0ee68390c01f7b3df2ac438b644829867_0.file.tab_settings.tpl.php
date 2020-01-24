<?php
/* Smarty version 3.1.31, created on 2020-01-23 12:59:32
  from "/home/mobatxik/public_html/dms/themes/default/clients/account/tab_settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2998b436f073_71632404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba3adf0ee68390c01f7b3df2ac438b644829867' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/clients/account/tab_settings.tpl',
      1 => 1573345306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2998b436f073_71632404 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_themes_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.themes_dropdown.php';
if (!is_callable('smarty_function_languages_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.languages_dropdown.php';
if (!is_callable('smarty_function_timezone_offset_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.timezone_offset_dropdown.php';
?>
    <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_page_titles'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_footer_text'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_theme'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_logout_url'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_language'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_timezone_offset'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_sessions_timeout'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_date_format'] == "no" && $_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_max_failed_login_attempts'] == "no") {?>

      <div class="notify yellow_bg">
        <div style="padding:8px">
          <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notify_no_client_permissions'];?>

        </div>
      </div>
      <br />

    <?php } else { ?>

      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="return rsv.validate(this, rules)">
        <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
" />
        <input type="hidden" name="page" value="settings" />

        <?php echo smarty_function_template_hook(array('location'=>"edit_client_settings_top"),$_smarty_tpl);?>


        <table class="list_table" cellpadding="0" cellspacing="1">
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_page_titles'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_page_titles'];?>
</td>
            <td><input type="text" name="page_titles" id="page_titles" style="width:98%" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_info']->value['settings']['page_titles'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_footer_text'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center"> </td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_footer_text'];?>
</td>
            <td><input type="text" name="footer_text" style="width:98%" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_info']->value['settings']['footer_text'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_theme'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_theme'];?>
</td>
            <td><?php echo smarty_function_themes_dropdown(array('name_id'=>"theme",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['theme'],'default_swatch'=>$_smarty_tpl->tpl_vars['client_info']->value['swatch']),$_smarty_tpl);?>
</td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_logout_url'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_logout_url'];?>
</td>
            <td><input type="text" name="logout_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_info']->value['logout_url'], ENT_QUOTES, 'UTF-8', true);?>
" style="width: 98%" /></td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_language'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_language'];?>
</td>
            <td><?php echo smarty_function_languages_dropdown(array('name_id'=>"ui_language",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['ui_language']),$_smarty_tpl);?>
</td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_timezone_offset'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_system_time_offset'];?>
</td>
            <td><?php echo smarty_function_timezone_offset_dropdown(array('name_id'=>"timezone_offset",'default'=>$_smarty_tpl->tpl_vars['client_info']->value['timezone_offset']),$_smarty_tpl);?>
</td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_sessions_timeout'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_sessions_timeout'];?>
</td>
            <td><input type="text" name="sessions_timeout" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['sessions_timeout'];?>
" style="width: 30px" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_minutes'];?>
</td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_date_format'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_date_format'];?>
</td>
            <td><input type="text" name="date_format" value="<?php echo $_smarty_tpl->tpl_vars['client_info']->value['date_format'];?>
" style="width: 80px" /> <span class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['text_date_formatting_link']->value;?>
</span></td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['may_edit_max_failed_login_attempts'] == "yes") {?>
          <tr>
            <td width="15" class="red" align="center">*</td>
            <td class="pad_left_small" width="180"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_auto_disable_account'];?>
</td>
            <td>
              <select name="max_failed_login_attempts">
                <option value=""   <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</option>
                <option value="3"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "3") {?>selected<?php }?>>3</option>
                <option value="4"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "4") {?>selected<?php }?>>4</option>
                <option value="5"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "5") {?>selected<?php }?>>5</option>
                <option value="6"  <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "6") {?>selected<?php }?>>6</option>
                <option value="10" <?php if ($_smarty_tpl->tpl_vars['client_info']->value['settings']['max_failed_login_attempts'] == "10") {?>selected<?php }?>>10</option>
              </select>
            </td>
          </tr>
        <?php }?>
        </table>

        <?php echo smarty_function_template_hook(array('location'=>"edit_client_settings_bottom"),$_smarty_tpl);?>


        <p>
          <input type="submit" name="update_account_settings" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
        </p>

      </form>

    <?php }
}
}
