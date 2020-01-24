<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:06:30
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_permissions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299a56d7cb01_27276655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ef90ddf9d08c334d2a0e166cbca171b3f9be247' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_permissions.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299a56d7cb01_27276655 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.clients_dropdown.php';
?>
  <div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_permissions'], 'UTF-8');?>
</div>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
    <input type="hidden" name="vis_id" value="<?php echo $_smarty_tpl->tpl_vars['vis_id']->value;?>
" />
    <input type="hidden" name="tab" value="permissions" />

    <table cellspacing="1" cellpadding="2" border="0" width="100%">
    <tr>
      <td width="130" class="medium_grey" valign="top"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_access_type'];?>
</td>
      <td>
        <table cellspacing="1" cellpadding="0" class="margin_bottom">
        <tr>
          <td>
            <input type="radio" name="access_type" id="at1" value="admin" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_type'] == 'admin') {?>checked<?php }?> />
              <label for="at1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_admin_only'];?>
</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="access_type" id="at2" value="public" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_type'] == 'public') {?>checked<?php }?> />
              <label for="at2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_public'];?>
 <span class="light_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_all_clients_have_access'];?>
</span></label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="access_type" id="at3" value="private" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_type'] == 'private') {?>checked<?php }?> />
              <label for="at3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_private'];?>
 <span class="light_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_specific_clients_have_access'];?>
</span></label>
          </td>
        </tr>
        </table>

        <div id="custom_clients" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_type'] != 'private') {?>style="display:none"<?php }?>>
          <table cellpadding="0" cellspacing="0" class="subpanel">
          <tr>
            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_available_clients'];?>
</td>
            <td></td>
            <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_selected_clients'];?>
</td>
          </tr>
          <tr>
            <td>
              <?php echo smarty_function_clients_dropdown(array('name_id'=>"available_client_ids[]",'multiple'=>"true",'multiple_action'=>"hide",'clients'=>$_smarty_tpl->tpl_vars['vis_info']->value['client_ids'],'size'=>"4",'style'=>"width: 220px"),$_smarty_tpl);?>

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
              <?php echo smarty_function_clients_dropdown(array('name_id'=>"selected_client_ids[]",'multiple'=>"true",'multiple_action'=>"show",'clients'=>$_smarty_tpl->tpl_vars['vis_info']->value['client_ids'],'size'=>"4",'style'=>"width: 220px"),$_smarty_tpl);?>

            </td>
          </tr>
          </table>
        </div>

      </td>
    </tr>
    <tr>
      <td class="medium_grey" valign="top"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_where_shown'];?>
</td>
      <td>

	      <div>
	        <input type="radio" name="access_view_mapping" id="fvm1" value="all" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_view_mapping'] == 'all') {?>checked<?php }?> />
	        <label for="fvm1"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_all_views'];?>
</label>
	      </div>
	      <div>
	        <input type="radio" name="access_view_mapping" id="fvm2" value="except" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_view_mapping'] == 'except') {?>checked<?php }?> />
	        <label for="fvm2"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_all_views_except'];?>
</label>
	      </div>
	      <div class="margin_bottom">
	        <input type="radio" name="access_view_mapping" id="fvm3" value="only" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_view_mapping'] == 'only') {?>checked<?php }?> />
	        <label for="fvm3"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_specific_views'];?>
</label>
	      </div>


        <div id="custom_views" <?php if ($_smarty_tpl->tpl_vars['vis_info']->value['access_view_mapping'] == 'all') {?>style="display:none"<?php }?> class="margin_top">
          <div class="grey_box">
            <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'view_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['view_info']->value) {
?>
              <?php $_smarty_tpl->_assignInScope('view_id', $_smarty_tpl->tpl_vars['view_info']->value['view_id']);
?>
              <li>
                <input type="checkbox" name="view_ids[]" id="view<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
"
                  <?php if (in_array($_smarty_tpl->tpl_vars['view_id']->value,$_smarty_tpl->tpl_vars['access_views']->value)) {?>checked<?php }?> />
                  <label for="view<?php echo $_smarty_tpl->tpl_vars['view_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['view_info']->value['view_name'];?>
</label>
              </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </ul>
          </div>
        </div>

      </td>
    </tr>
    </table>

    <p>
      <input type="button" id="delete_visualization" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_delete_visualization'];?>
" class="burgundy right" />
      <input type="submit" name="update" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
    </p>

  </form>
<?php }
}
