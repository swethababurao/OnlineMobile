<?php /* Smarty version Smarty-3.0.7, created on 2012-05-25 14:49:17
         compiled from "application/views/templates\admin/addmodels.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69004efceb5b797af2-92949434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce7dc037292178650ec2e3c8477df3068a0db22' => 
    array (
      0 => 'application/views/templates\\admin/addmodels.tpl',
      1 => 1325198170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69004efceb5b797af2-92949434',
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
			
				<div class="contenttoper">Add New Models</div>
            	
		
		<div class="formboundry" style="height:169px;">
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
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Model Name:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="text" name="txtcatname" id="txtcatname" class="txtform"/></div>
				</div>
				
				
				<div class="labelheight" >
				<div class="labeldiv" style="width:127px;float:left;"><label for="flimg1" class="label">Category Icon:</label></div>
				<div class="labeldiv" style="float:left;"><input type="file" id="flimg1" name="flimg1" class="txtform" style="height:23px;" /></div>
				</div>
				<div class="labelheight" style=" margin-left: 148px;padding-top: 10px;"><input type="submit" value="Add Model" class="loginbtn" /></div> 
			</form>
		
		</div>
	
 </div>
		
 <?php $_template = new Smarty_Internal_Template("admin/includes/footerhtml.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		