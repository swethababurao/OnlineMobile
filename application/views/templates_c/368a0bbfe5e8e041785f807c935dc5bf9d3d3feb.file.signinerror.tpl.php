<?php /* Smarty version Smarty-3.0.7, created on 2012-06-03 12:21:04
         compiled from "application/views/templates\htmlincludes/signinerror.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306124fcb3a90dd5059-50521541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368a0bbfe5e8e041785f807c935dc5bf9d3d3feb' => 
    array (
      0 => 'application/views/templates\\htmlincludes/signinerror.tpl',
      1 => 1338718822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306124fcb3a90dd5059-50521541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style type="text/css">
<!--
.style1 {
	font-size: 24px
}
-->
</style>
<div id="contentcolumn" class="contentcolumn">
				<div id="catcontent" class="contentdesign">
				
				<div class="registinfodiv">
				User Login    |   <span class="style1" style="color:red;font-weight:bold;">Invalid User Name Or Password!</span></div>
<div class="innerdivborder">
                	 <form name="usersignin" action="verify_login" type="post">
				<div class="labelheight">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">Email:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="text" name="email" id="txtcatname" class="txtform"/></div>
				</div>
				
				<div class="labelheight">
				<div class="labeldiv" style="width:127px;float:left;"><label for="txtcatname" class="label">User Password:*</label></div>
				<div class="labeldiv" style="float:left;"><input type="password" name="password" id="txtcatname" class="txtform"/></div>
				</div>

				<div class="labelheight" style=" margin-left: 148px;padding-top: 10px;"><input type="submit" value="Login" class="normalbtn" /></div> 
				</form>
				</div>
                	
                </div>
          </div>