<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 15:03:34
         compiled from "/home/ovniprocmk/www/admin936qk7kst/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100802294858a06b36146943-47706086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025931e28ea565c143a35f8d161b83316600be8e' => 
    array (
      0 => '/home/ovniprocmk/www/admin936qk7kst/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1469814660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100802294858a06b36146943-47706086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a06b36151b75_94403484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a06b36151b75_94403484')) {function content_58a06b36151b75_94403484($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
