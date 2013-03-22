
{* include header basic javascript css and other .... *}

{include file="admin/includes/headerhtml.tpl" url="$url" title="$title"}


{* to inclucde to the top portion .... *}
 {include file="admin/includes/topheader.tpl" url="$url" title="$title"}

{* to inclucde to the top portion .... *}
 {include file="admin/includes/topmenu.tpl" url="$url" title="$title"}
 
  <div id="topcontentdiv" class="contentarea">
{* to inclucde to the left menu portion .... *}
 {include file="admin/includes/leftmenu.tpl" url="$url" title="$title"}
 
{* to inclucde to the main contents portion .... *}
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
		
{* include the footer html .... *}
 {include file="admin/includes/footerhtml.tpl" url="$url" title="$title"}
		