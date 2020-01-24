<?php
/* Smarty version 3.1.31, created on 2020-01-23 12:59:26
  from "/home/mobatxik/public_html/dms/themes/default/clients/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2998ae6a1fb3_94591694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecab55b82ea74f8ab616a4156c935e51ed04a156' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/clients/index.tpl',
      1 => 1573345306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2998ae6a1fb3_94591694 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_display_num_form_submissions')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.display_num_form_submissions.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_forms.gif" width="34" height="34" /></td>
    <td class="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_forms'];?>
</td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


  <?php if ($_smarty_tpl->tpl_vars['forms_page_default_message']->value) {?>
    <div class="margin_bottom_large">
      <?php echo $_smarty_tpl->tpl_vars['forms_page_default_message']->value;?>

    </div>
  <?php }?>

  
  <?php if (count($_smarty_tpl->tpl_vars['num_client_forms']->value) == 0) {?>
    <b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_client_no_forms'];?>
</b>
  <?php } else { ?>

    <div id="search_form" class=" margin_bottom_large">
      <form action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
        <table cellspacing="2" cellpadding="0" id="search_form_table">
        <tr>
          <td class="blue" width="70"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_search'];?>
</td>
          <td>
            <input type="text" size="20" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_criteria']->value['keyword'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="submit" name="search_forms" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_search'];?>
" />
            <input type="button" name="reset" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?reset=1'"
              <?php if (count($_smarty_tpl->tpl_vars['forms']->value) < $_smarty_tpl->tpl_vars['num_client_forms']->value) {?>
                value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
 (<?php echo $_smarty_tpl->tpl_vars['num_client_forms']->value;?>
)" class="bold"
              <?php } else { ?>
                value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_show_all'];?>
" class="light_grey" disabled
              <?php }?> />
          </td>
        </tr>
        </table>
      </form>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['forms']->value) == 0) {?>
      <div class="notify yellow_bg">
        <div style="padding: 8px">
          <?php if ($_smarty_tpl->tpl_vars['num_client_forms']->value == 0) {?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_forms_found'];?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_no_forms_found_search'];?>

          <?php }?>
        </div>
      </div>
    <?php } else { ?>
	    <table class="list_table" cellpadding="1" cellspacing="1" style="width:600px">
	    <tr>
	      <?php $_smarty_tpl->_assignInScope('up_down', '');
?>
          <?php if ($_smarty_tpl->tpl_vars['search_criteria']->value['order'] == "form_name-DESC") {?>
	        <?php $_smarty_tpl->_assignInScope('order_col', "order=form_name-ASC");
?>
	        <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_down.gif\" />");
?>
	      <?php } elseif ($_smarty_tpl->tpl_vars['search_criteria']->value['order'] == "form_name-ASC") {?>
	        <?php $_smarty_tpl->_assignInScope('order_col', "order=form_name-DESC");
?>
	        <?php $_smarty_tpl->_assignInScope('up_down', "<img src=\"".((string)$_smarty_tpl->tpl_vars['theme_url']->value)."/images/sort_up.gif\" />");
?>
	      <?php } else { ?>
	        <?php $_smarty_tpl->_assignInScope('order_col', "order=form_name-DESC");
?>
	      <?php }?>
          <th class="sortable_col<?php if ($_smarty_tpl->tpl_vars['up_down']->value) {?> over<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['order_col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_form'];?>
 <?php echo $_smarty_tpl->tpl_vars['up_down']->value;?>
</a>
          </th>
	      </th>
	      <th width="80"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_status'];?>
</th>
	      <th width="100"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_submissions'];?>
</th>
	    </tr>

	    
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forms']->value, 'form_info', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['form_info']->value) {
?>
	      <?php $_smarty_tpl->_assignInScope('form_id', $_smarty_tpl->tpl_vars['form_info']->value['form_id']);
?>

	      <tr style="height: 20px;">
	        <td class="pad_left_small">
              <?php if ($_smarty_tpl->tpl_vars['form_info']->value['form_type'] == "external") {?>
                <?php echo $_smarty_tpl->tpl_vars['form_info']->value['form_name'];?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['form_info']->value['form_url'];?>
" class="show_form" target="_blank" title="Open form in dialog window"></a>
              <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['form_info']->value['form_name'];?>

              <?php }?>
	        </td>
	        <td align="center">
	          <?php if ($_smarty_tpl->tpl_vars['form_info']->value['is_active'] == 'no') {?>
	            <span class="red"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_offline'];?>
</span>
	          <?php } else { ?>
	            <span class="light_green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_online'];?>
</span>
	          <?php }?>
	        </td>
	        <td align="center">
              <div class="form_info_link">
	            <a href="forms/index.php?form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_view'], 'UTF-8');?>

                    <span class="num_submissions_box"><?php echo smarty_function_display_num_form_submissions(array('form_id'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl);?>
</span>
                </a>
              </div>
	        </td>
	      </tr>
	    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


	    </table>

	  <?php }?>

  <?php }?>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
