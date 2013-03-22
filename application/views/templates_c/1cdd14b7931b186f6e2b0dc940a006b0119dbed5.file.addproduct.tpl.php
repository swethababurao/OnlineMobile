<?php /* Smarty version Smarty-3.0.7, created on 2011-12-29 22:58:32
         compiled from "application/views/templates\admin/addproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116404efcf098b7b343-21705505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cdd14b7931b186f6e2b0dc940a006b0119dbed5' => 
    array (
      0 => 'application/views/templates\\admin/addproduct.tpl',
      1 => 1325199509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116404efcf098b7b343-21705505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("admin/includes/headerhtml.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
 <?php $_template = new Smarty_Internal_Template("admin/includes/topheader.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
 <?php $_template = new Smarty_Internal_Template("admin/includes/topmenu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
 
  <div id="topcontentdiv" class="contentarea">
 <?php $_template = new Smarty_Internal_Template("admin/includes/leftmenu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
 
<div id="contentcolumn" class="contentarea">
			
				<div class="contenttoper">Add New Accessory</div>
            	
		
		<div class="formboundry">
			<form>
			
				<div class="labelheight" style="margin-top:28px">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Select Category:*</label></div>
				<div class="labeldiv" style="float:left;"><select name="txtcatname" id="txtcatname" class="txtform">
									<option>Ipone</option>
									<option>Nokia</option>
									<option>Samsung</option>
									<option>Motrola</option>
									</select>
					</div>
				</div>
				
				<div class="labelheight">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Select Model:*</label></div>
				<div class="labeldiv" style="float:left;"><select name="txtcatname" id="txtcatname" class="txtform">
									<option>Ipone 4S</option>
									<option>Ipone 4</option>
									<option>Ipone 3gs</option>
									<option>Ipone 3</option>
									</select>
					</div>
				</div>
				
				<div class="labelheight">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Select Accessory:*</label></div>
				<div class="labeldiv" style="float:left;"><select name="txtcatname" id="txtcatname" class="txtform">
									<option>Headset</option>
									<option>cover</option>
									<option>bluetooth</option>
									<option>charger</option>
									</select>
					</div>
				</div>
								
				<div class="labelheight">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Product Name:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="text" name="txtcatname" id="txtcatname" class="txtform"/></div>
				</div>
				
				<div class="labelheight">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Price:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="text" name="txtcatname" id="txtcatname" class="txtform"/></div>
				</div>
				
				<div class="labelheight"">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Product Code:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="text" name="txtcatname" id="txtcatname" class="txtform"/></div>
				</div>
				
				<div class="labelheight"  style="height:114px;">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Description:*</label></div>
				<div class="labeldiv" style="float:left;"><textarea rows="7" cols="50" id="txtdesc" name="txtdesc" class="txtform"> 
</textarea></div>
				</div>
				
				<div class="labelheight" style=" margin-left: 148px;padding-top: 10px;"><input type="submit" value="Add Product" class="loginbtn" /></div> 
			</form>
		
		</div>
	
 </div>
		
 <?php $_template = new Smarty_Internal_Template("admin/includes/footerhtml.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		