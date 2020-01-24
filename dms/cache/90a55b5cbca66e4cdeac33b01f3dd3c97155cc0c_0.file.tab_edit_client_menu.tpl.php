<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:16:44
  from "/home/mobatxik/public_html/dms/themes/default/admin/settings/tab_edit_client_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299cbc83b259_96930916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90a55b5cbca66e4cdeac33b01f3dd3c97155cc0c' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/admin/settings/tab_edit_client_menu.tpl',
      1 => 1573345306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299cbc83b259_96930916 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_template_hook')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.template_hook.php';
if (!is_callable('smarty_function_pages_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.pages_dropdown.php';
if (!is_callable('smarty_function_forms_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.forms_dropdown.php';
if (!is_callable('smarty_function_clients_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.clients_dropdown.php';
?>
    <div class="previous_page_icon">
      <a href="index.php?page=menus"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/up.jpg" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" border="0" /></a>
    </div>

    <div class="subtitle underline margin_top_large">
      <?php if ($_smarty_tpl->tpl_vars['is_new_menu']->value) {?>
        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_add_client_menu'], 'UTF-8');?>

      <?php } else { ?>
        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_client_menu'], 'UTF-8');?>

      <?php }?>
    </div>

    <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


    <?php echo smarty_function_template_hook(array('location'=>"admin_settings_client_menu_top"),$_smarty_tpl);?>


    <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" onsubmit="return mm.update_client_menu_submit(this)">
      <input type="hidden" name="page" value="edit_client_menu" />
      <input type="hidden" name="menu_id" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
" />

      <table cellspacing="1" cellpadding="0" width="400" class="pad_bottom_large">
      <tr>
        <td width="120"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_menu_name'];?>
</td>
        <td><input type="text" name="menu" id="menu_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['menu'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:98%" maxlength="255" /></td>
      </tr>
      </table>

      <div class="sortable groupable edit_menu" id="<?php echo $_smarty_tpl->tpl_vars['sortable_id']->value;?>
">
        <ul class="header_row">
          <li class="col1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_order'];?>
</li>
          <li class="col2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_page'];?>
</li>
          <li class="col3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_display_text'];?>
</li>
          <li class="col4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_options'];?>
</li>
          <li class="col5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_submenu'];?>
</li>
          <li class="col6 colN del"></li>
        </ul>
        <div class="clear"></div>
        <ul class="rows check_areas" id="rows">
        <?php $_smarty_tpl->_assignInScope('previous_item', '');
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['menu_items'], 'i', false, 'k', 'edit_menu_items', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['total'];
?>
          <?php if ($_smarty_tpl->tpl_vars['i']->value['is_new_sort_group'] == "yes") {?>
            <?php if ($_smarty_tpl->tpl_vars['previous_item']->value != '') {?>
              </div>
              <div class="clear"></div>
            </li>
            <?php }?>
           <li class="sortable_row">
             <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['last'] : null)) {?>
               <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', "yes");
?>
             <?php } else { ?>
               <?php $_smarty_tpl->_assignInScope('next_item_is_new_sort_group', $_smarty_tpl->tpl_vars['menu']->value['menu_items'][(isset($_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['iteration'] : null)]['is_new_sort_group']);
?>
             <?php }?>
            <div class="row_content<?php if ($_smarty_tpl->tpl_vars['next_item_is_new_sort_group']->value == 'no') {?> grouped_row<?php }?>">
          <?php }?>

          <?php $_smarty_tpl->_assignInScope('previous_item', $_smarty_tpl->tpl_vars['i']->value);
?>
            <div class="row_group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['last'] : null)) {?> rowN<?php }?>">
              <input type="hidden" class="sr_order" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
" />
              <ul>
                <li class="col1 sort_col"><?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
</li>
                <li class="col2"><?php echo smarty_function_pages_dropdown(array('menu_type'=>"client",'default'=>$_smarty_tpl->tpl_vars['i']->value['page_identifier'],'name_id'=>"page_identifier_".((string)$_smarty_tpl->tpl_vars['i']->value['list_order']),'is_building_menu'=>true),$_smarty_tpl);?>
</li>
                <li class="col3"><input type="text" name="display_text_<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
" id="display_text_<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['display_text'], ENT_QUOTES, 'UTF-8', true);?>
" /></li>
                <li class="col4" id="row_<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
_options">
                  <?php if ($_smarty_tpl->tpl_vars['i']->value['page_identifier'] == "custom_url") {?>
                    URL:&nbsp;<input type="text" name="custom_options_<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
" id="custom_options_<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['custom_options'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:155px" />
                  <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['page_identifier'] == "client_form_submissions") {?>
                    <?php echo smarty_function_forms_dropdown(array('name_id'=>"custom_options_".((string)$_smarty_tpl->tpl_vars['i']->value['list_order']),'default'=>$_smarty_tpl->tpl_vars['i']->value['custom_options'],'include_blank_option'=>true,'blank_option_is_optgroup'=>true),$_smarty_tpl);?>

                  <?php } else { ?>
                    <span class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_na'];?>
</span>
                  <?php }?>
                </li>
                <li class="col5 check_area"><input type="checkbox" name="submenu_<?php echo $_smarty_tpl->tpl_vars['i']->value['list_order'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['is_submenu'] == "yes") {?>checked="checked"<?php }?> /></li>
                <li class="col6 colN del"></li>
              </ul>
              <div class="clear"></div>
            </div>

          <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_edit_menu_items']->value['last'] : null)) {?>
            </div>
            <div class="clear"></div>
          </li>
          <?php }?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ul>
      </div>

      <p>
        <a href="#" onclick="return mm.add_menu_item_row()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_row'];?>
</a>
      </p>

      <div id="menu_options" class="hidden">
        <?php echo smarty_function_pages_dropdown(array('menu_type'=>"client",'name_id'=>"page_identifier_%%X%%",'is_building_menu'=>true),$_smarty_tpl);?>

      </div>

      <div id="form_dropdown_template" class="hidden">
        <?php echo smarty_function_forms_dropdown(array('name_id'=>"custom_options_%%X%%",'include_blank_option'=>true,'blank_option_is_optgroup'=>true),$_smarty_tpl);?>

      </div>

      <div id="client_dropdown_template" class="hidden">
        <?php echo smarty_function_clients_dropdown(array('name_id'=>"custom_options_%%X%%",'style'=>"width:150px"),$_smarty_tpl);?>

      </div>

      <p>
        <input type="submit" name="update_client_menu" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
" />
      </p>
    </form>
<?php }
}
