<?php
/* Smarty version 3.1.31, created on 2020-01-22 22:35:11
  from "C:\xampp\htdocs\formtools\themes\default\admin\forms\edit\tab_edit_email.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e28c00fe5c801_95525264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e7ec3c1d66a92570b62384891e27969686df3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\formtools\\themes\\default\\admin\\forms\\edit\\tab_edit_email.tpl',
      1 => 1573338106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e28c00fe5c801_95525264 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once 'C:\\xampp\\htdocs\\formtools\\global\\smarty_plugins\\function.ft_include.php';
?>
    <div class="previous_page_icon">
      <a href="?page=emails&form_id=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/up.jpg" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_previous_page'];?>
" border="0" /></a>
    </div>

    <div class="underline margin_top_large">
      <span class="subtitle"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_edit_email_template'], 'UTF-8');?>
</span>
    </div>

    <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


    <form method="post" id="edit_email_template_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
?page=edit_email">
      
      <input type="hidden" name="form_id" id="form_id" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
      <input type="hidden" name="email_id" id="email_id" value="<?php echo $_smarty_tpl->tpl_vars['email_id']->value;?>
" />
      <input type="hidden" name="num_recipients" id="num_recipients" value="<?php echo count($_smarty_tpl->tpl_vars['template_info']->value['recipients']);?>
" />

      <div class="inner_tabset" id="edit_email_template">
        <div class="tab_row fourCols">
          <div class="inner_tab1<?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value == 1) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_configuration'];?>
</div>
          <div class="inner_tab2<?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value == 2) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_recipient_sp'];?>
</div>
          <div class="inner_tab3<?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value == 3) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_content'];?>
</div>
          <div class="inner_tab4<?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value == 4) {?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_test'];?>
</div>
        </div>
        <div class="inner_tab_content">
          <div class="inner_tab_content1" <?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value != 1) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_email_tab1.tpl"),$_smarty_tpl);?>

          </div>
          <div class="inner_tab_content2" <?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value != 2) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_email_tab2.tpl"),$_smarty_tpl);?>

          </div>
          <div class="inner_tab_content3" <?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value != 3) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_email_tab3.tpl"),$_smarty_tpl);?>

          </div>
          <div class="inner_tab_content4" <?php if ($_smarty_tpl->tpl_vars['edit_email_tab']->value != 4) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_ft_include(array('file'=>"admin/forms/edit/tab_edit_email_tab4.tpl"),$_smarty_tpl);?>

          </div>
        </div>
      </div>

      <p>
        <input type="submit" name="update_email_template" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_update_email_template'];?>
" />
      </p>

    </form>
<?php }
}
