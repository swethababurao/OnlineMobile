{literal}
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
					{/literal}
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
						{foreach from=$cat key=rowno item=c}
							
							<span class="cattitle" id="lbl{$rowno}">{$c->categoryName}</span>
							<span class="cattitle" id="txt{$rowno}" style="display:none;"><input type="text" value="{$c->categoryName}" id="txtname{$rowno}" /></span>
							<span class="catbtns" id="btnedits{$rowno}">
							<input type="button" value="Edit" onclick="editcat('{$rowno}');" class="btncss"/>&nbsp;
							<input type="button" value="Delete" onclick="deletecat('{$c->id}','{$suburl}');" class="btncss"/></span>
							
							<span class="catbtns" id="btncancel{$rowno}" style="display:none;">
							<input type="button" value="Update" onclick="upadatecat('{$rowno}','{$c->id}','{$suburl}');" class="btncss"/>&nbsp;
							<input type="button" value="Cancel" onclick="cancelcat('{$rowno}');" class="btncss"/></span>
							<br  />
						{/foreach}
						</div> 
			</form>
		
		</div>
	