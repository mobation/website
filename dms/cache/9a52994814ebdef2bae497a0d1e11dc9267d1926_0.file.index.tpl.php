<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:39:02
  from "/home/mobatxik/public_html/dms/modules/pages/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e29a1f61f5469_24438859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a52994814ebdef2bae497a0d1e11dc9267d1926' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/pages/templates/index.tpl',
      1 => 1573345312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29a1f61f5469_24438859 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><a href="index.php"><img src="images/icon_pages.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
      <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>

    </td>
  </tr>
  </table>

  <?php echo smarty_function_ft_include(array('file'=>'messages.tpl'),$_smarty_tpl);?>


  <div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_intro_para_1'];?>

    <?php echo $_smarty_tpl->tpl_vars['text_intro_para_2']->value;?>

  </div>

  <?php if (count($_smarty_tpl->tpl_vars['pages']->value) == 0) {?>

    <div class="notify yellow_bg" class="margin_bottom_large">
      <div style="padding:8px">
        <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_no_pages'];?>

      </div>
    </div>

  <?php } else { ?>

    <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>


    <table class="list_table" style="width:100%" cellpadding="1" cellspacing="1">
    <tr style="height: 20px;">
      <th width="20"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_id'], 'UTF-8');?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['L']->value['word_page'];?>
</th>
      <th width="100">Page Type</th>
      <th width="120">Who can Access?</th>
      <th width="60"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_view'], 'UTF-8');?>
</th>
      <th class="edit"></th>
      <th class="del"></th>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, NULL, 'row', array (
  'index' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']++;
?>
      <?php $_smarty_tpl->_assignInScope('index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['index'] : null));
?>
      <?php $_smarty_tpl->_assignInScope('count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_row']->value['iteration'] : null));
?>
      <?php $_smarty_tpl->_assignInScope('page_id', $_smarty_tpl->tpl_vars['page']->value['page_id']);
?>
      <tr>
        <td align="center" class="light_grey"><?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
</td>
        <td class="pad_left_small"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
</td>
        <td class="pad_left">
          <?php if ($_smarty_tpl->tpl_vars['page']->value['content_type'] == "html") {?>
            <span class=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_html'];?>
</span>
          <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['content_type'] == "php") {?>
            <span class=""><?php echo $_smarty_tpl->tpl_vars['L']->value['word_php'];?>
</span>
          <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['content_type'] == "smarty") {?>
            <span class=""><?php echo $_smarty_tpl->tpl_vars['L']->value['word_smarty'];?>
</span>
          <?php }?>
        </td>
        <td class="pad_left">
          <?php if ($_smarty_tpl->tpl_vars['page']->value['access_type'] == 'admin') {?>
            <span class="blue"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_admin_only'];?>
</span>
          <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['access_type'] == 'public') {?>
            <span class="green"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_public'];?>
</span>
          <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['access_type'] == 'private') {?>
            <span class="purple"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_private'];?>
</span>
          <?php }?>
        </td>
        <td align="center"><a href="view.php?page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['word_view'], 'UTF-8');?>
</a></td>
        <td class="edit"><a href="edit.php?page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"></a></td>
        <td class="del"><a href="#" onclick="return pages_ns.delete_page(<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
)"></a></td>
      </tr>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


    </table>

  <?php }?>

  <form action="add.php" method="post">
    <p>
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_add_page'];?>
" />
    </p>
  </form>

<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
