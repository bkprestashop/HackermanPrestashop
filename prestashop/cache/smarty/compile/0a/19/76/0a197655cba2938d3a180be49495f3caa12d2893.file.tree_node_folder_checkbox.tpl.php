<?php /* Smarty version Smarty-3.1.19, created on 2016-12-12 15:58:33
         compiled from "/var/www/html/prestashop/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_folder_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:827801924584ec929acc2c7-65454402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a197655cba2938d3a180be49495f3caa12d2893' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/controllers/scenes/helpers/tree/tree_node_folder_checkbox.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '827801924584ec929acc2c7-65454402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584ec929b327c6_10460430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ec929b327c6_10460430')) {function content_584ec929b327c6_10460430($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
