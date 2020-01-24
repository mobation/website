<?php
/* Smarty version 3.1.31, created on 2020-01-22 21:06:55
  from "C:\xampp\htdocs\formtools\themes\default\admin\forms\edit\tab_public_form_omit_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e28ab5fbb1de2_33701809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dcb25eba481a3e37c13a22e8ea4223c7f276369' => 
    array (
      0 => 'C:\\xampp\\htdocs\\formtools\\themes\\default\\admin\\forms\\edit\\tab_public_form_omit_list.tpl',
      1 => 1573338106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e28ab5fbb1de2_33701809 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once 'C:\\xampp\\htdocs\\formtools\\global\\smarty_plugins\\function.ft_include.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once 'C:\\xampp\\htdocs\\formtools\\global\\smarty_plugins\\function.clients_dropdown.php';
?>
  <div class="previous_page_icon">
    <a href="?page=main&form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/up.jpg" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
"
      alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" border="0" /></a>
  </div>

  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_public_form_omit_list'], 'UTF-8');?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_public_form_omit_list_page'];?>

  </div>

  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" onsubmit="ft.select_all('selected_client_ids[]')">
    <input type="hidden" name="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
    <input type="hidden" name="page" value="public_form_omit_list" />

    <table cellpadding="1" cellspacing="0" class="list_table">
    <tr>
      <td class="medium_grey pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_clients_can_access_form'];?>
</td>
      <td></td>
      <td class="medium_grey pad_left_small"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_clients_cannot_access_form'];?>
</td>
    </tr>
    <tr>
      <td>
        <?php echo smarty_function_clients_dropdown(array('name_id'=>"available_client_ids[]",'multiple'=>"true",'multiple_action'=>"hide",'clients'=>$_smarty_tpl->tpl_vars['form_omit_list']->value,'size'=>"4",'style'=>"width: 280px"),$_smarty_tpl);?>

      </td>
      <td align="center" valign="middle" width="100">
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_add_uc_rightarrow'];?>
"
          onclick="ft.move_options('available_client_ids[]', 'selected_client_ids[]');" /><br />
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_remove_uc_leftarrow'];?>
"
          onclick="ft.move_options('selected_client_ids[]', 'available_client_ids[]');" />
      </td>
      <td>
        <?php echo smarty_function_clients_dropdown(array('name_id'=>"selected_client_ids[]",'multiple'=>"true",'multiple_action'=>"show",'clients'=>$_smarty_tpl->tpl_vars['form_omit_list']->value,'size'=>"4",'style'=>"width: 280px"),$_smarty_tpl);?>

      </td>
    </tr>
    </table>

    <p>
      <input type="submit" name="update_public_form_omit_list" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
      <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_clear_omit_list'];?>
" class="blue" onclick="page_ns.clear_omit_list()" />
    </p>
  </form>
<?php }
}
