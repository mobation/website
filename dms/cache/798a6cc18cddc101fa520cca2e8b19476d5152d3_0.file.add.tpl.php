<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:42:33
  from "/home/mobatxik/public_html/dms/modules/pages/templates/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e29a2c92ac0f7_12781371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '798a6cc18cddc101fa520cca2e8b19476d5152d3' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/pages/templates/add.tpl',
      1 => 1573345312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29a2c92ac0f7_12781371 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.clients_dropdown.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="./"><img src="images/icon_pages.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
      <span class="joiner">&raquo;</span>
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_add_page'];?>

    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <form action="edit.php" method="post" name="pages_form" onsubmit="return rsv.validate(this, rules)">
    <input type="hidden" name="use_wysiwyg_hidden" id="use_wysiwyg_hidden" value="" />
    <input type="hidden" id="tinymce_available" value="<?php echo $_smarty_tpl->tpl_vars['tinymce_available']->value;?>
" />

    <table cellspacing="1" cellpadding="1" border="0" width="100%">
    <tr>
      <td width="140" valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_page_name'];?>
</td>
      <td>
      	<input type="text" name="page_name" value="" style="width:200px" maxlength="50" autofocus />
      	<div class="light_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['text_page_name_desc'];?>
</div>
      </td>
    </tr>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_page_heading'];?>
</td>
      <td><input type="text" name="heading" value="" style="width:100%" /></td>
    </tr>
    <tr>
      <td>Content Type</td>
      <td>
      	<input type="radio" name="content_type" value="html" id="ct1" onclick="pages_ns.change_content_type(this.value)" checked />
      	  <label for="ct1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_html'];?>
</label>
      	<input type="radio" name="content_type" value="php" id="ct2" onclick="pages_ns.change_content_type(this.value)" />
      	  <label for="ct2"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_php'];?>
</label>
      	<input type="radio" name="content_type" value="smarty" id="ct3" onclick="pages_ns.change_content_type(this.value)" />
      	  <label for="ct3"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_smarty'];?>
</label>
      </td>
    </tr>
    <tr>
      <td valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_page_content'];?>
</td>
      <td>
        
      	<div id="wysiwyg_div" <?php if ($_smarty_tpl->tpl_vars['tinymce_available']->value == "no") {?>style="display: none"<?php }?>>
      	  <textarea name="wysiwyg_content" id="wysiwyg_content" style="width:100%; height:300px"></textarea>
      	</div>

      	<div id="codemirror_div" <?php if ($_smarty_tpl->tpl_vars['tinymce_available']->value == "yes") {?>style="display: none"<?php }?>>
      	  <div style="border: 1px solid #999999; padding: 3px">
      	    <textarea name="codemirror_content" id="codemirror_content" style="width:100%; height:300px"></textarea>
      	  </div>

      	  <?php echo '<script'; ?>
>
      	  var html_editor = new CodeMirror.fromTextArea(document.getElementById("codemirror_content"), {
            mode: "xml"
      	  });
      	  <?php echo '</script'; ?>
>
      	</div>

        <?php if ($_smarty_tpl->tpl_vars['tinymce_available']->value == "yes") {?>
      	  <input type="checkbox" id="uwe" name="use_wysiwyg" checked onchange="pages_ns.toggle_wysiwyg_field(this.checked)" />
      	    <label for="uwe">Use WYSIWYG editor</label>
      	  <br />
      	<?php }?>
      	<br />
      </td>
    </tr>
    <tr>
      <td valign="top">Who can access?</td>
      <td>
      	<table cellspacing="1" cellpadding="0" >
      	<tr>
      	  <td>
      	    <input type="radio" name="access_type" id="at1" value="admin" checked onclick="pages_ns.toggle_access_type(this.value)" />
      	      <label for="at1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_admin_only'];?>
</label>
      	  </td>
      	</tr>
      	<tr>
      	  <td>
      	    <input type="radio" name="access_type" id="at2" value="public" onclick="pages_ns.toggle_access_type(this.value)" />
      	      <label for="at2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_public'];?>
 <span class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_all_clients_have_access'];?>
</span></label>
      	  </td>
      	</tr>
      	<tr>
      	  <td>
      	    <input type="radio" name="access_type" id="at3" value="private" onclick="pages_ns.toggle_access_type(this.value)" />
      	      <label for="at3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_private'];?>
 <span class="light_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_only_specific_clients_have_access'];?>
</span></label>
      	  </td>
      	</tr>
      	</table>

      	<div id="custom_clients" class="margin_top" style="display:none">
      	  <table cellpadding="0" cellspacing="0" width="100%" class="list_table">
      	  <tr>
      	    <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_clients'];?>
</td>
      	    <td></td>
      	    <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_selected_clients'];?>
</td>
      	  </tr>
      	  <tr>
      	    <td>
      	      <?php echo smarty_function_clients_dropdown(array('name_id'=>"available_client_ids[]",'multiple'=>"true",'multiple_action'=>"hide",'clients'=>array(),'size'=>"4",'style'=>"width: 240px"),$_smarty_tpl);?>

      	    </td>
      	    <td align="center" valign="middle" width="100">
      	      <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"
                onclick="ft.move_options(this.form['available_client_ids[]'], this.form['selected_client_ids[]']);" /><br />
      	      <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"
                onclick="ft.move_options(this.form['selected_client_ids[]'], this.form['available_client_ids[]']);" />
      	    </td>
      	    <td>
      	      <?php echo smarty_function_clients_dropdown(array('name_id'=>"selected_client_ids[]",'multiple'=>"true",'multiple_action'=>"show",'clients'=>array(),'size'=>"4",'style'=>"width: 240px"),$_smarty_tpl);?>

      	    </td>
      	  </tr>
      	  </table>
      	</div>

      	<div class="light_grey">
      	  Note that pages still need to be assigned to a client via their menu or a hardcoded link in order to be seen. This
      	  setting is for security purposes only.
      	</div>

      </td>
    </tr>
    </table>

    <p>
      <input type="submit" name="add_page" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_update'], 'UTF-8');?>
" />
    </p>

  </form>

<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
