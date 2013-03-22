<?php /* Smarty version Smarty-3.0.7, created on 2012-05-27 22:39:16
         compiled from "application/views/templates\htmlincludes/increment_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82634fc290f4a807e0-32388335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35c11c8b150888380ccb03c4ff464cb9f2ca7c8' => 
    array (
      0 => 'application/views/templates\\htmlincludes/increment_cart.tpl',
      1 => 1338142935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82634fc290f4a807e0-32388335',
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
      <form id="form1" name="form1" action="../add_to_shopping_cart" method="post">
        <input name="dataid" id="dataid" value="<?php echo $_smarty_tpl->getVariable('data')->value[0]->id;?>
" type="hidden" />
        <input name="Addtocart" type="submit" value="Add to shopping cart" />
      </form>
      </div></td>
  </tr>  
</table>

</div>