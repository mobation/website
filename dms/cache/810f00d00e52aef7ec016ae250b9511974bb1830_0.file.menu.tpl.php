<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:54:16
  from "/home/mobatxik/public_html/dms/themes/default/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e29a588cf6a89_03179577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810f00d00e52aef7ec016ae250b9511974bb1830' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/default/menu.tpl',
      1 => 1573345308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29a588cf6a89_03179577 (Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php $_smarty_tpl->_assignInScope('is_current_parent_menu', false);
?>

  <div class="menu_items">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_items']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>

    <?php $_smarty_tpl->_assignInScope('link_id', '');
?>

    
    <?php if ($_smarty_tpl->tpl_vars['i']->value['is_submenu'] == "no") {?>

      
      <?php if (isset($_smarty_tpl->tpl_vars['nav_parent_page_url']->value) && $_smarty_tpl->tpl_vars['i']->value['url'] == $_smarty_tpl->tpl_vars['nav_parent_page_url']->value) {?>
        <?php $_smarty_tpl->_assignInScope('is_current_parent_menu', true);
?>
      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('is_current_parent_menu', false);
?>
      <?php }?>

      <div class="nav_link"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"<?php echo $_smarty_tpl->tpl_vars['link_id']->value;?>
 class="no_border"><?php echo $_smarty_tpl->tpl_vars['i']->value['display_text'];?>
</a></div>

    
    <?php } else { ?>
      <div class="nav_link_submenu"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"<?php echo $_smarty_tpl->tpl_vars['link_id']->value;?>
 class="no_border">&#8212; <?php echo $_smarty_tpl->tpl_vars['i']->value['display_text'];?>
</a></div>
    <?php }?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </div>
<?php }
}
