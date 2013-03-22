<?php /* Smarty version Smarty-3.0.7, created on 2012-05-25 13:21:32
         compiled from "application/views/templates\htmlincludes/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148064fbf6b3c9f9867-19997402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b0f86e169f44b1331b1e28c4dd9523dd4d3b5a' => 
    array (
      0 => 'application/views/templates\\htmlincludes/signin.tpl',
      1 => 1337944879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148064fbf6b3c9f9867-19997402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="contentcolumn" class="contentcolumn">
				<div id="catcontent" class="contentdesign">
				<div class="registinfodiv">
				User Login </div>
				<div class="innerdivborder">
                	 <form name="usersignin" action="verify_login" method="post">
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