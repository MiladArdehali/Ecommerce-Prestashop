<?php /*%%SmartyHeaderCode:127145883158a1136b63b054-75324269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '080db12d57efe9643b61571ef4ac3401e729d674' => 
    array (
      0 => '/home/ovniprocmk/www/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1469815353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127145883158a1136b63b054-75324269',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a1136bb280b5_60634913',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a1136bb280b5_60634913')) {function content_58a1136bb280b5_60634913($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
						Fabricants
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="first_item">
						<a 
						href="http://ovni-pro.com/5_hp" title="En savoir plus sur HP">
							HP
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://ovni-pro.com/2_makerbot" title="En savoir plus sur Makerbot">
							Makerbot
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://ovni-pro.com/6_ovni-pro" title="En savoir plus sur OVNI PRO">
							OVNI PRO
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://ovni-pro.com/3_pp3dp" title="En savoir plus sur PP3DP">
							PP3DP
						</a>
					</li>
																			<li class="last_item">
						<a 
						href="http://ovni-pro.com/4_simplify-3d" title="En savoir plus sur Simplify 3D">
							Simplify 3D
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Tous les fabricants</option>
													<option value="http://ovni-pro.com/5_hp">HP</option>
													<option value="http://ovni-pro.com/2_makerbot">Makerbot</option>
													<option value="http://ovni-pro.com/6_ovni-pro">OVNI PRO</option>
													<option value="http://ovni-pro.com/3_pp3dp">PP3DP</option>
													<option value="http://ovni-pro.com/4_simplify-3d">Simplify 3D</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
