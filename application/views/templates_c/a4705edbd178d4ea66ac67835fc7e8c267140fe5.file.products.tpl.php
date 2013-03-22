<?php /* Smarty version Smarty-3.0.7, created on 2012-05-27 17:51:27
         compiled from "application/views/templates\products/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214854fc24d7fe9b458-30318227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4705edbd178d4ea66ac67835fc7e8c267140fe5' => 
    array (
      0 => 'application/views/templates\\products/products.tpl',
      1 => 1338133884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214854fc24d7fe9b458-30318227',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="contentcolumn" class="contentcolumn">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
		<div class="imagename" style="float:left;">
		    <table width="10%" border="0" cellspacing="5" cellpadding="0">
		      <tr>
		        <td>
		        <a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/product_details/<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
" title="click to view features"><img src="<?php echo $_smarty_tpl->getVariable('prourl')->value;?>
<?php echo $_smarty_tpl->getVariable('product')->value->image;?>
" alt="<?php echo $_smarty_tpl->getVariable('product')->value->product_name;?>
" height="250" width="300" /></a>
		        </td>
		      </tr>
		      <tr>
		        <td><a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/product_details/<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
" ><?php echo $_smarty_tpl->getVariable('product')->value->product_model;?>
</a> </td>
		      </tr>
		    </table>
		  </div>
	<?php }} ?>
</div>