<?php /* Smarty version Smarty-3.1.19, created on 2016-12-12 18:11:26
         compiled from "/var/www/html/prestashop/admin9354/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:674680399584eda3edeb141-41198796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83fd2c23d809359c5f556ef337a32ec79e773ca' => 
    array (
      0 => '/var/www/html/prestashop/admin9354/themes/default/template/content.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '674680399584eda3edeb141-41198796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584eda3ee0a713_04693077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584eda3ee0a713_04693077')) {function content_584eda3ee0a713_04693077($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
