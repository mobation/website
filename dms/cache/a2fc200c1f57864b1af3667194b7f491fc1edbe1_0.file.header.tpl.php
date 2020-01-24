<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:54:16
  from "/home/mobatxik/public_html/dms/themes/classicgrey/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e29a588c97fb1_38891708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2fc200c1f57864b1af3667194b7f491fc1edbe1' => 
    array (
      0 => '/home/mobatxik/public_html/dms/themes/classicgrey/header.tpl',
      1 => 1573345322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29a588c97fb1_38891708 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_template_hook')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.template_hook.php';
?>
<!DOCTYPE html>
<html dir="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['special_text_direction'];?>
">
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/favicon.ico">
  <?php echo smarty_function_template_hook(array('location'=>"head_top"),$_smarty_tpl);?>

  <?php echo '<script'; ?>
>
  //<![CDATA[
  var g = {
    root_url:       "<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
",
    error_colours:  ["ffbfbf", "ffeded"],
    notify_colours: ["c6e2ff", "f2f8ff"],
    js_debug:       <?php echo $_smarty_tpl->tpl_vars['g_js_debug']->value;?>

  };
  //]]>
  <?php echo '</script'; ?>
>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/css/main.css?v=3_0_0">
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/styles.css?v=3_0_0">
  <link href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/smoothness/jquery-ui-1.8.14.custom.css" rel="stylesheet" type="text/css"/>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/scripts/jquery-ui-1.8.14.custom.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/general.js?v=3_0_0"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
/global/scripts/rsv.js?v=3_0_0"><?php echo '</script'; ?>
>
  <?php echo $_smarty_tpl->tpl_vars['head_string']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['head_js']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['head_css']->value;?>


  <?php echo smarty_function_template_hook(array('location'=>"head_bottom"),$_smarty_tpl);?>

</head>
<body>

<div id="container">
  <div id="header"><?php if (isset($_smarty_tpl->tpl_vars['settings']->value['logo_link'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['settings']->value['logo_link'];?>
"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/header_logo.jpg" width="392" height="60" border="0" /><?php if (isset($_smarty_tpl->tpl_vars['settings']->value['logo_link'])) {?></a><?php }?></div>
  <div id="header_row">
    <div id="left_nav_top">
      <?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value && isset($_smarty_tpl->tpl_vars['settings']->value['program_version'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['release_type'] == "alpha") {?>
          <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
-alpha-<?php echo $_smarty_tpl->tpl_vars['settings']->value['release_date'];?>
</b>
        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['release_type'] == "beta") {?>
          <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
-beta-<?php echo $_smarty_tpl->tpl_vars['settings']->value['release_date'];?>
</b>
        <?php } else { ?>
          <b><?php echo $_smarty_tpl->tpl_vars['settings']->value['program_version'];?>
</b>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['account']->value['account_type'] == "admin") {?>
          <a href="#" onclick="return ft.check_updates()" class="update_link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_update'];?>
</a>
        <?php }?>
      <?php } else { ?>
        <div style="height: 20px"> </div>
      <?php }?>
    </div>
  </div>

  <div class="outer">
    <div class="inner">
      <div class="float-wrap">
      <div id="content">

        <div class="content_wrap">

          <div id="main_window">
            <div id="page_content">
<?php }
}
