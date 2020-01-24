<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:22:24
  from "/home/mobatxik/public_html/dms/modules/swift_mailer/templates/tab_settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299e101698c4_87494005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f38eca156fcb27f4996a544875445b177c422697' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/swift_mailer/templates/tab_settings.tpl',
      1 => 1573345312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299e101698c4_87494005 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['text_settings_desc']->value;?>

</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" onsubmit="return rsv.validate(this, rules)">
    <table cellpadding="0" cellspacing="1">
    <tr>
        <td width="25">
            <input type="checkbox" name="swiftmailer_enabled" id="swiftmailer_enabled" value="yes"
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['swiftmailer_enabled'] == "yes") {?>checked<?php }?>
            onchange="page_ns.toggle_enabled_fields(this.checked)" />
        </td>
        <td colspan="2" class="bold"><label for="swiftmailer_enabled"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_enable_module'];?>
</label></td>
    </tr>
    <tr>
        <td> </td>
        <td width="180" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_smtp_server'];?>
</td>
        <td>
            <input type="text" name="smtp_server" id="smtp_server" style="width:200px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm_settings']->value['smtp_server'], ENT_QUOTES, 'UTF-8', true);?>
"
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['swiftmailer_enabled'] != "yes") {?>disabled<?php }?> />
        </td>
    </tr>
    <tr>
        <td> </td>
        <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_port'];?>
</td>
        <td>
            <input type="text" name="port" id="port" style="width:35px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm_settings']->value['port'], ENT_QUOTES, 'UTF-8', true);?>
"
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['swiftmailer_enabled'] != "yes") {?>disabled<?php }?> />
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="requires_authentication" id="requires_authentication" value="yes"
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['requires_authentication'] == "yes") {?>checked<?php }?>
            onchange="page_ns.toggle_authentication_fields(this.checked)" />
        </td>
        <td colspan="2" class="bold"><label for="requires_authentication"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_use_authentication'];?>
</label></td>
    </tr>
    <tr>
        <td> </td>
        <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_username'];?>
</td>
        <td><input type="text" name="username" id="username" style="width:200px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm_settings']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
"
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['requires_authentication'] == "no") {?>disabled<?php }?> /></td>
    </tr>
    <tr>
        <td> </td>
        <td class="medium_grey" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_password'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['password']) {?>
            <input type="hidden" id="has_password" value="1" />
            <div>********</div>
            <?php }?>
            <input type="password" name="password" id="password" style="width:200px" value=""
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['requires_authentication'] == "no") {?>disabled<?php }?> />
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['password']) {?>
                <div class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_password_hidden'];?>
</div>
            <?php }?>
        </td>
    </tr>
    <tr>
        <td> </td>
        <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_authentication_procedure'];?>
</td>
        <td>
            <input type="radio" name="authentication_procedure" id="ap1" value="LOGIN" <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['authentication_procedure'] == "LOGIN") {?>checked<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['requires_authentication'] == "no") {?>disabled<?php }?> />
            <label for="ap1">LOGIN</label>
            <input type="radio" name="authentication_procedure" id="ap2" value="PLAIN" <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['authentication_procedure'] == "PLAIN") {?>checked<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['requires_authentication'] == "no") {?>disabled<?php }?> />
            <label for="ap2">PLAIN</label>
            <input type="radio" name="authentication_procedure" id="ap3" value="CRAMMD5" <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['authentication_procedure'] == "CRAMMD5") {?>checked<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['requires_authentication'] == "no") {?>disabled<?php }?> />
            <label for="ap3">CRAM-MD5</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="use_encryption" id="use_encryption" value="yes" <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['use_encryption'] == "yes") {?>checked<?php }?>
            onchange="page_ns.toggle_encryption_fields(this.checked)" />
        </td>
        <td colspan="2" class="bold"><label for="use_encryption"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_use_encryption'];?>
</label></td>
    </tr>
    <tr>
        <td> </td>
        <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_encryption_type'];?>
</td>
        <td>
            <input type="radio" name="encryption_type" id="et1" value="SSL" <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['encryption_type'] == "SSL") {?>checked<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['use_encryption'] != "yes") {?>disabled<?php }?> />
            <label for="et1">SSL</label>
            <input type="radio" name="encryption_type" id="et2" value="TLS" <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['encryption_type'] == "TLS") {?>checked<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['use_encryption'] != "yes") {?>disabled<?php }?> />
            <label for="et2">TLS</label>
        </td>
    </tr>
    </table>

    <br />

    <div class="grey_box">
        <div style="margin_top">
        <a href="#" onclick="return page_ns.toggle_advanced_settings()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_advanced_settings_rightarrow'];?>
</a>
        </div>

        <div <?php if ($_smarty_tpl->tpl_vars['remember_advanced_settings']->value == '' || $_smarty_tpl->tpl_vars['remember_advanced_settings']->value == "false") {?>style="display:none"<?php }?> id="advanced_settings">
            <table cellpadding="0" cellspacing="1">
            <tr>
                <td colspan="2" class="medium_grey" width="205"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_server_connection_timeout'];?>
</td>
                <td>
                    <input type="text" name="server_connection_timeout" id="server_connection_timeout" style="width:35px"
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm_settings']->value['server_connection_timeout'], ENT_QUOTES, 'UTF-8', true);?>
" /> <?php echo $_smarty_tpl->tpl_vars['L']->value['word_seconds'];?>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_email_charset'];?>
</td>
                <td><input type="text" name="charset" id="charset" style="width:80px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm_settings']->value['charset'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
            </tr>
            <tr>
                <td width="25">
                    <input type="checkbox" name="use_anti_flooding" id="use_anti_flooding" value="yes" <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['use_anti_flooding'] == "yes") {?>checked<?php }?>
                        onchange="page_ns.toggle_antiflooding_fields(this.checked)" />
                </td>
                <td class="bold" colspan="2"><label for="use_anti_flooding"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_use_antiflooding'];?>
</label></td>
            </tr>
            <tr>
            <td> </td>
            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_email_batch_size'];?>
</td>
            <td class="medium_grey">
                <input type="text" name="anti_flooding_email_batch_size" id="anti_flooding_email_batch_size" style="width:35px"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm_settings']->value['anti_flooding_email_batch_size'], ENT_QUOTES, 'UTF-8', true);?>
"
                    <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['use_anti_flooding'] != "yes") {?>disabled<?php }?> />
            </td>
            </tr>
            <tr>
                <td> </td>
                <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_batch_wait_time'];?>
</td>
                <td class="medium_grey">
                    <input type="text" name="anti_flooding_email_batch_wait_time" id="anti_flooding_email_batch_wait_time" style="width:35px"
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm_settings']->value['anti_flooding_email_batch_wait_time'], ENT_QUOTES, 'UTF-8', true);?>
"
                        <?php if ($_smarty_tpl->tpl_vars['sm_settings']->value['use_anti_flooding'] != "yes") {?>disabled<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['L']->value['word_seconds'];?>
</td>
            </tr>
            </table>
        </div>
    </div>

    <p>
        <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
    </p>

</form>
<?php }
}
