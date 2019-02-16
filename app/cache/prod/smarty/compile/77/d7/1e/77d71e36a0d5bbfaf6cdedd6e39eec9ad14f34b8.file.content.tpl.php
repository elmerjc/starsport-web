<?php /* Smarty version Smarty-3.1.19, created on 2017-04-30 20:43:06
         compiled from "/var/www/dispacsa.com/public_html/admin129r2jywx/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2063005849590692aa50d250-63938422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77d71e36a0d5bbfaf6cdedd6e39eec9ad14f34b8' => 
    array (
      0 => '/var/www/dispacsa.com/public_html/admin129r2jywx/themes/default/template/content.tpl',
      1 => 1492910061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063005849590692aa50d250-63938422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590692aa5157e4_54066264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590692aa5157e4_54066264')) {function content_590692aa5157e4_54066264($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
