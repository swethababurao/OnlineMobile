<?php /* Smarty version Smarty-3.0.7, created on 2012-05-25 14:49:10
         compiled from "application/views/templates\admin/changepassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98494efc60309b0151-73677027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbea843a33f290c82b5aa8c3f9d0d5cfbcf5fef4' => 
    array (
      0 => 'application/views/templates\\admin/changepassword.tpl',
      1 => 1325007120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98494efc60309b0151-73677027',
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
			
				<div class="contenttoper">Change Password</div>
            	
		
		<div class="formboundry" style="height:169px;">
			<form>
			<div class="labelheight" style="margin-top:28px">
				<div class="labeldiv" style="width:127px;"><label for="txtoldpassword" class="label">Old Password:*</label></div>
				<div  class="labeldiv" style="float:left;"><input type="text" name="txtoldpassword" id="txtoldpassword" class="txtform"/></div>
				</div>
				<div class="labelheight" >
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtnewpassword" class="label">New Password:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="password" name="txtnewpassword" id="txtnewpassword" class="txtform"/></div>
				</div>
				
				<div class="labelheight" >
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtconfpassword" class="label">Conform Password:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="password" name="txtconfpassword" id="txtconfpassword" class="txtform"/></div>
				</div>
				<div class="labelheight" style=" margin-left: 148px;padding-top: 0px;"><input type="submit" value="Change Password" class="loginbtn" /></div> 
			</form>
		
		</div>
	
 </div>
		
 <?php $_template = new Smarty_Internal_Template("admin/includes/footerhtml.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		