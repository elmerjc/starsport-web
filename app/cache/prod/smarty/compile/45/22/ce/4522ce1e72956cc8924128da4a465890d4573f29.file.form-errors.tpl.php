<?php /* Smarty version Smarty-3.1.19, created on 2017-05-04 00:48:29
         compiled from "/var/www/dispacsa.com/public_html/themes/PRS01/templates/_partials/form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:419775433590ac0adb1f0d9-65771412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4522ce1e72956cc8924128da4a465890d4573f29' => 
    array (
      0 => '/var/www/dispacsa.com/public_html/themes/PRS01/templates/_partials/form-errors.tpl',
      1 => 1492912637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '419775433590ac0adb1f0d9-65771412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590ac0adb29001_13747819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ac0adb29001_13747819')) {function content_590ac0adb29001_13747819($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
