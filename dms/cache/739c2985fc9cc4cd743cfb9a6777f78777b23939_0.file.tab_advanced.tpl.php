<?php
/* Smarty version 3.1.31, created on 2020-01-23 13:14:28
  from "/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_advanced.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e299c347a5f25_47077890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739c2985fc9cc4cd743cfb9a6777f78777b23939' => 
    array (
      0 => '/home/mobatxik/public_html/dms/modules/data_visualization/templates/activity_charts/tab_advanced.tpl',
      1 => 1573345310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e299c347a5f25_47077890 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.ft_include.php';
if (!is_callable('smarty_function_menus_dropdown')) require_once '/home/mobatxik/public_html/dms/global/smarty_plugins/function.menus_dropdown.php';
?>
<input type="hidden" id="vis_id" value="<?php echo $_smarty_tpl->tpl_vars['vis_id']->value;?>
" />

<div class="subtitle underline margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_pages_module'], 'UTF-8');?>
</div>

<?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['pages_module_available']->value) {?>
    <div class="margin_bottom_large">
        <?php echo $_smarty_tpl->tpl_vars['L']->value['text_pages_module_intro'];?>

    </div>

    <div class="grey_box margin_bottom_large" id="smarty_editor_wrapper">
        <div class="margin_bottom bold"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_smarty_pages'];?>
</div>
        <input type="text" style="width: 99%" class="medium_grey" id="smarty_editor"
            value="{template_hook location=&quot;data_visualization&quot; vis_id=<?php echo $_smarty_tpl->tpl_vars['vis_id']->value;?>
 height=300 width=600}" />

        <?php echo '<script'; ?>
>
          var smarty_editor = new CodeMirror.fromTextArea(document.getElementById("smarty_editor"), {
            mode: "smarty"
          });
        <?php echo '</script'; ?>
>
    </div>

    <div class="grey_box margin_bottom_large" id="php_pages_editor_wrapper">
        <div class="margin_bottom bold"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_php_pages'];?>
</div>
        <textarea class="medium_grey" id="php_pages_editor" style="width:99%; height: 100px">FormTools\Modules::includeModule("data_visualization");
$width  = 600;
$height = 300;
FormTools\Modules\DataVisualization\Visualizations::displayVisualization(<?php echo $_smarty_tpl->tpl_vars['vis_id']->value;?>
, $width, $height);</textarea>

        <?php echo '<script'; ?>
>
          var php_pages_editor = new CodeMirror.fromTextArea(document.getElementById("php_pages_editor"), {
            mode: "text/x-php"
              });
        <?php echo '</script'; ?>
>
    </div>

    <div>
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_create_page_add_menu_item'];?>
" id="add_to_menu" />
      <span class="light_grey">|</span> <a href="../../pages/"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_goto_pages_module'];?>
</a>
      <span class="light_grey">|</span> <a href="../../../admin/settings/index.php?page=menus"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_goto_menus_page'];?>
</a>
    </div>
    <br />

  <?php } else { ?>
    <div class="notify">
      <div style="padding:6px">
        <?php echo $_smarty_tpl->tpl_vars['L']->value['notify_pages_module_not_installed'];?>

      </div>
    </div>
  <?php }?>

  <div class="subtitle underline margin_bottom_large margin_top_large"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['L']->value['phrase_use_in_own_pages'], 'UTF-8');?>
</div>

    <div class="margin_bottom_large">
        <?php echo $_smarty_tpl->tpl_vars['L']->value['text_use_in_pages_desc'];?>

    </div>

    <div class="grey_box margin_bottom_large">
        <textarea style="width:100%; height: 150px" id="own_pages_editor" class="medium_grey">&lt;?php
require_once('<?php echo $_smarty_tpl->tpl_vars['g_root_dir']->value;?>
/global/library.php');
FormTools\Core::init(array("start_sessions" => false));
FormTools\Modules::includeModule("data_visualization");
$width  = 600;
$height = 300;
FormTools\Modules\DataVisualization\Visualizations::displayVisualization(<?php echo $_smarty_tpl->tpl_vars['vis_id']->value;?>
, $width, $height);
<?php echo '?>';?></textarea>
    </div>

    <?php echo '<script'; ?>
>
      var own_pages_editor = new CodeMirror.fromTextArea(document.getElementById("own_pages_editor"), {
        mode: "php"
      });
    <?php echo '</script'; ?>
>

    <div class="clear"></div>
    <p>
        <input type="button" id="delete_visualization" value="<?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_delete_visualization'];?>
" class="burgundy right" />
    </p>
    <div class="clear"></div>


<div id="add_to_menu_dialog" class="hidden">
  <div class="margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['L']->value['text_create_page_desc'];?>

  </div>

  <table width="100%">
  <tr>
    <td width="160" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_page_menu_title'];?>
</td>
    <td>
      <input type="text" style="width: 100%" id="page_title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vis_info']->value['vis_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
    </td>
  </tr>
  <tr>
    <td valign="top" class="medium_grey">Menu</td>
    <td><?php echo smarty_function_menus_dropdown(array('name_id'=>"menu_id"),$_smarty_tpl);?>
</td>
  </tr>
  <tr>
    <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['word_position'];?>
</td>
    <td>
      <div id="position_div" class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_please_select_menu'];?>
</div>
    </td>
  </tr>
  <tr>
    <td class="medium_grey"><?php echo $_smarty_tpl->tpl_vars['L']->value['phrase_submenu_item'];?>
</td>
    <td>
      <input type="radio" name="is_submenu" id="is1" value="yes" />
        <label for="is1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_yes'];?>
</label>
      <input type="radio" name="is_submenu" id="is2" value="no" checked="checked" />
        <label for="is2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_no'];?>
</label>
    </td>
  </tr>
  </table>
</div>
<?php }
}
