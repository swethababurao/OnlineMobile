
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
		
{* include the footer html .... *}
 {include file="admin/includes/footerhtml.tpl" url="$url" title="$title"}
		