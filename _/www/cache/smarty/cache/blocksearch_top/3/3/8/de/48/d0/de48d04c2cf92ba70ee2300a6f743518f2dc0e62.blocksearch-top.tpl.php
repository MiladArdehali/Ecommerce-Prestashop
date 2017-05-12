<?php /*%%SmartyHeaderCode:123104465158a04f9e2b9b12-24502014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de48d04c2cf92ba70ee2300a6f743518f2dc0e62' => 
    array (
      0 => '/home/ovniprocmk/www/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1469815355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123104465158a04f9e2b9b12-24502014',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a0c42adafe32_76969301',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a0c42adafe32_76969301')) {function content_58a0c42adafe32_76969301($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//ovni-pro.com/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
