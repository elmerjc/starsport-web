<?php /* Smarty version Smarty-3.1.19, created on 2017-05-09 23:32:42
         compiled from "/var/www/dispacsa.com/public_html/admin129r2jywx/themes/new-theme/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:816075703591297ea793507-41729665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3acd86d232b473e49ef755665baa14e08a01854c' => 
    array (
      0 => '/var/www/dispacsa.com/public_html/admin129r2jywx/themes/new-theme/template/helpers/kpi/row.tpl',
      1 => 1492910061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '816075703591297ea793507-41729665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591297ea7a9cc6_52040170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591297ea7a9cc6_52040170')) {function content_591297ea7a9cc6_52040170($_smarty_tpl) {?>
<div class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="kpi-container">
        <div class="row">
          <?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable((int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)), null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kpi']['iteration']>$_smarty_tpl->tpl_vars['col']->value+1) {?>
              </div>
              <div class="row">
            <?php }?>
            <div class="col-md-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
