<?php /*%%SmartyHeaderCode:152106091358a096367fe6b9-87170009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff1c00fadfd084fc282317576599c3b91e8eb65' => 
    array (
      0 => '/home/ovniprocmk/www/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1469815356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152106091358a096367fe6b9-87170009',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a096368f7784_62168036',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a096368f7784_62168036')) {function content_58a096368f7784_62168036($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					Fournisseurs
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="first_item">
                                Ebay
                				</li>
															<li class="item">
                                HP
                				</li>
															<li class="last_item">
                                machine-3D.com
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Tous les fournisseurs</option>
													<option value="http://ovni-pro.com/3__ebay">Ebay</option>
													<option value="http://ovni-pro.com/4__hp">HP</option>
													<option value="http://ovni-pro.com/2__machine-3dcom">machine-3D.com</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
