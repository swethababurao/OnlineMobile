<div id="contentcolumn" class="contentcolumn">
	{foreach from=$data item=product}
		<div class="imagename" style="float:left;">
		    <table width="10%" border="0" cellspacing="5" cellpadding="0">
		      <tr>
		        <td>
		        <a href="{$suburl}/userhome/product_details/{$product->id}" title="click to view features"><img src="{$prourl}{$product->image}" alt="{$product->product_name}" height="250" width="300" /></a>
		        </td>
		      </tr>
		      <tr>
		        <td><a href="{$suburl}/userhome/product_details/{$product->id}" >{$product->product_model}</a> </td>
		      </tr>
		    </table>
		  </div>
	{/foreach}
</div>