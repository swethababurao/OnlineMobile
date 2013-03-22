<?php /* Smarty version Smarty-3.0.7, created on 2012-06-04 13:53:30
         compiled from "application/views/templates\products/productdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200974fcca1bad42374-99486159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4639fc4f3e8e3187db4cffe72c9a1871ae8f412' => 
    array (
      0 => 'application/views/templates\\products/productdetails.tpl',
      1 => 1338810806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200974fcca1bad42374-99486159',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style type="text/css">
<!--
.style2 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>

<div id="contentcolumn" class="contentcolumn">
<table width="100%" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td><div align="justify" class="style2" style="color:color: #000000;">Product Details </div></td>
  </tr>
  <tr>
    <td><table width="80%" border="0" cellspacing="5" cellpadding="0" style="color:red;">
      <tr>
        <td width="73%"><table width="90%" table height="280" border="1" cellspacing="1" cellpadding="0" style="color:#000000">
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Name</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC"><?php echo $_smarty_tpl->getVariable('data')->value[0]->product_name;?>
</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Model</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC"><?php echo $_smarty_tpl->getVariable('data')->value[0]->product_model;?>
</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Features</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC"><?php echo $_smarty_tpl->getVariable('data')->value[0]->features;?>
</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Color</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC"><?php echo $_smarty_tpl->getVariable('data')->value[0]->color;?>
</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Price</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC"><?php echo $_smarty_tpl->getVariable('data')->value[0]->price;?>
</td>
          </tr>
        </table></td>
        <td width="27%"><img src="<?php echo $_smarty_tpl->getVariable('prourl')->value;?>
<?php echo $_smarty_tpl->getVariable('data')->value[0]->image;?>
" height="300" width="300" /></td>
      </tr>
    </table></td>
  </tr>
<tr>
<td><div align="justify" class="style1">
       <label>
        <a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/addCart?product_id=<?php echo $_smarty_tpl->getVariable('data')->value[0]->id;?>
&&product_name=<?php echo $_smarty_tpl->getVariable('data')->value[0]->product_name;?>
&&price=<?php echo $_smarty_tpl->getVariable('data')->value[0]->price;?>
&&product_model=<?php echo $_smarty_tpl->getVariable('data')->value[0]->product_model;?>
&&color=<?php echo $_smarty_tpl->getVariable('data')->value[0]->color;?>
" title="New User">Add to shopping cart</a></span></li>
       
          </label>
      </div></td>
  </tr>  
</table>

</div>