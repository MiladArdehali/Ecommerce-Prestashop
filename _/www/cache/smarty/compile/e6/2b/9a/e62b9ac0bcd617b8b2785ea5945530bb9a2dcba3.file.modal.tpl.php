<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 13:05:19
         compiled from "/home/ovniprocmk/www/admin936qk7kst/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16575255758a04f7fd7a2c1-69156641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62b9ac0bcd617b8b2785ea5945530bb9a2dcba3' => 
    array (
      0 => '/home/ovniprocmk/www/admin936qk7kst/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1469814661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16575255758a04f7fd7a2c1-69156641',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a04f7fd9df51_08045136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a04f7fd9df51_08045136')) {function content_58a04f7fd9df51_08045136($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
