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
            <td bordercolor="#000000" bgcolor="#CCCCCC">{$data[0]->product_name}</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Model</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC">{$data[0]->product_model}</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Features</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC">{$data[0]->features}</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Color</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC">{$data[0]->color}</td>
          </tr>
          <tr>
            <td bordercolor="#000000" bgcolor="#CCCCCC">Price</td>
            <td bordercolor="#000000" bgcolor="#CCCCCC">{$data[0]->price}</td>
          </tr>
        </table></td>
        <td width="27%"><img src="{$prourl}{$data[0]->image}" height="300" width="300" /></td>
      </tr>
    </table></td>
  </tr>
<tr>
<td><div align="justify" class="style1">
       <label>
        <a href="{$suburl}/userhome/addCart?product_id={$data[0]->id}&&product_name={$data[0]->product_name}&&price={$data[0]->price}&&product_model={$data[0]->product_model}&&color={$data[0]->color}" title="New User">Add to shopping cart</a></span></li>
       
          </label>
      </div></td>
  </tr>  
</table>

</div>