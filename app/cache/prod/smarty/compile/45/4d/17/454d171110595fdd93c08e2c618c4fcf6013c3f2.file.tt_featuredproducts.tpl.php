<?php /* Smarty version Smarty-3.1.19, created on 2017-04-30 21:04:56
         compiled from "modules/tt_featuredproducts/views/templates/hook/tt_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:636978558590697c8971c24-36519973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '454d171110595fdd93c08e2c618c4fcf6013c3f2' => 
    array (
      0 => 'modules/tt_featuredproducts/views/templates/hook/tt_featuredproducts.tpl',
      1 => 1493099947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636978558590697c8971c24-36519973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'tt_total' => 0,
    'tt_cnt' => 0,
    'product' => 0,
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590697c89a6595_70158465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590697c89a6595_70158465')) {function content_590697c89a6595_70158465($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["tt_cnt"] = new Smarty_variable("1", null, 0);?>
<?php $_smarty_tpl->tpl_vars["tt_total"] = new Smarty_variable("0", null, 0);?>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['tt_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['tt_total']->value+1, null, 0);?>
<?php } ?>

<section class="ttfeatured-products clearfix">
    <h3 class="tab-title"><?php echo smartyTranslate(array('s'=>'Productos destacados','d'=>'Modules.FeaturedProducts.Shop'),$_smarty_tpl);?>
</h3>
    <div class="ttfeatured-content products">
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['tt_total']->value>=8) {?>
				<!-- Start TemplateTrip 2 product slide code -->
				<?php if ($_smarty_tpl->tpl_vars['tt_cnt']->value%2!=0) {?>
				<ul>
					<li class="featureli">
						<ul>
						<li>
				<?php }?>
			<?php }?>
				<!-- End TemplateTrip 2 product slide code -->

				<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>


				<!-- Start TemplateTrip 2 product slide code -->
			<?php if ($_smarty_tpl->tpl_vars['tt_total']->value>=8) {?>
				<?php if ($_smarty_tpl->tpl_vars['tt_cnt']->value%2==0) {?>
						</li>
						</ul>
					</li>
					</ul>
				<?php }?>
				<?php }?>

				<?php $_smarty_tpl->tpl_vars['tt_cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['tt_cnt']->value+1, null, 0);?>
				<!-- End TemplateTrip 2 product slide code -->
        <?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['tt_total']->value>=8) {?>
			<?php if ($_smarty_tpl->tpl_vars['tt_cnt']->value%2==0) {?>
					</li>
					</ul>
				</li>
				</ul>
			<?php }?>
		<?php }?>
    </div>
    <div class="allproduct"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'All products','d'=>'Modules.FeaturedProducts.Shop'),$_smarty_tpl);?>
</a></div>
</section>
<?php }} ?>
