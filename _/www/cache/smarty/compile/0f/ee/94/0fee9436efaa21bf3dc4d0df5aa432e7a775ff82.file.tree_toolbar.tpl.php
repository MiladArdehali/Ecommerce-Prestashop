<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 15:03:33
         compiled from "/home/ovniprocmk/www/admin936qk7kst/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141865718658a06b356e8b94-80612881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fee9436efaa21bf3dc4d0df5aa432e7a775ff82' => 
    array (
      0 => '/home/ovniprocmk/www/admin936qk7kst/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1469814696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141865718658a06b356e8b94-80612881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a06b3576f9f5_86387593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a06b3576f9f5_86387593')) {function content_58a06b3576f9f5_86387593($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
