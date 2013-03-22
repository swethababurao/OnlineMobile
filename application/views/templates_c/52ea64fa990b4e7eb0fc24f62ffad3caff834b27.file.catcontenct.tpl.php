<?php /* Smarty version Smarty-3.0.7, created on 2012-05-28 01:17:23
         compiled from "application/views/templates\admin/includes/catcontenct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23994fc2b603722583-26143588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ea64fa990b4e7eb0fc24f62ffad3caff834b27' => 
    array (
      0 => 'application/views/templates\\admin/includes/catcontenct.tpl',
      1 => 1338160551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23994fc2b603722583-26143588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

					<script language=javascript>
						
						function editcat(rowno)
 						{
							
							var lbl =  document.getElementById('lbl'+rowno).style;
 							var txt =  document.getElementById('txt'+rowno).style;
							//var dv =  document.getElementById('txtname'+rowno).style;
							var ed =  document.getElementById('btnedits'+rowno).style;
							var cn =  document.getElementById('btncancel'+rowno).style;
							lbl.display = "none";
							txt.display = "block";
							ed.display = "none";
							cn.display = "block";
							
 						}
						
						function cancelcat(rowno)
 						{
							
							var lbl =  document.getElementById('lbl'+rowno).style;
 							var txt =  document.getElementById('txt'+rowno).style;
							//var dv =  document.getElementById('txtname'+rowno).style;
							var ed =  document.getElementById('btnedits'+rowno).style;
							var cn =  document.getElementById('btncancel'+rowno).style;
							lbl.display = "block";
							txt.display = "none";
							ed.display = "block";
							cn.display = "none";
 						}
					
					
						
					</script>
					
				<div class="contenttoper">Add New Category</div>
            	
		
		<div class="formboundry" style="height:169px;">
		<div class="errtext" style="display:none" id="loginerror">Error while insertin</div>
			<form enctype="multipart/form-data" name="form1" method="post">
				<input type="hidden" id="action" name="action" value="action" />
				<div class="labelheight" style="margin-top:28px">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Category Name:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="text" name="txtcatname" id="txtcatname" class="txtform"/></div>
				</div>
				
				
				<div class="labelheight" >
				<div class="labeldiv" style="width:127px;float:left;"><label for="flimg1" class="label">Category Icon:</label></div>
				<div class="labeldiv" style="float:left;"><input type="file" id="flimg1" name="flimg1" class="txtform" style="height:23px;" /></div>
				</div>
				<div class="labelheight" style=" margin-left: 148px;padding-top: 10px;"><input type="submit" value="Add Category" class="loginbtn"  /></div>
				
				<div class="catdetail">
						<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['rowno'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
 $_smarty_tpl->tpl_vars['rowno']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
							
							<span class="cattitle" id="lbl<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
"><?php echo $_smarty_tpl->getVariable('c')->value->categoryName;?>
</span>
							<span class="cattitle" id="txt<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
" style="display:none;"><input type="text" value="<?php echo $_smarty_tpl->getVariable('c')->value->categoryName;?>
" id="txtname<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
" /></span>
							<span class="catbtns" id="btnedits<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
">
							<input type="button" value="Edit" onclick="editcat('<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
');" class="btncss"/>&nbsp;
							<input type="button" value="Delete" onclick="deletecat('<?php echo $_smarty_tpl->getVariable('c')->value->id;?>
','<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
');" class="btncss"/></span>
							
							<span class="catbtns" id="btncancel<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
" style="display:none;">
							<input type="button" value="Update" onclick="upadatecat('<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
','<?php echo $_smarty_tpl->getVariable('c')->value->id;?>
','<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
');" class="btncss"/>&nbsp;
							<input type="button" value="Cancel" onclick="cancelcat('<?php echo $_smarty_tpl->tpl_vars['rowno']->value;?>
');" class="btncss"/></span>
							<br  />
						<?php }} ?>
						</div> 
			</form>
		
		</div>
	