<?php /* Smarty version Smarty-3.0.7, created on 2012-05-25 15:14:11
         compiled from "application/views/templates\admin/includes/logincontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108234fbf85a30646b1-70207963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8996367bc3ef38cdeba1682f8baed3402bd2a65b' => 
    array (
      0 => 'application/views/templates\\admin/includes/logincontent.tpl',
      1 => 1337951268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108234fbf85a30646b1-70207963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

					<script language=javascript>
						function loginvalidation(url)
 						{
							//alert("clicked");
							var flag = true;
 							var flds0 =  document.getElementById('txtuseremail');
							var flds1 =  document.getElementById('txtpassword');
							var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
							var val1 = flds1.value;
							var val2 = flds0.value;
							if(val2 == "")
 							{
 
   								$('#txtuseremail').css("border","1px solid red");
								// document.getElementById('divvalidation').style.display='block';
								
 								flag = false;
							}
 							if(val1 == "")
 							{
 
   								$('#txtpassword').css("border","1px solid red");
								// document.getElementById('divvalidation').style.display='block';
								
 								flag = false;
							}
 							if(!emailReg.test(flds0.value ))
							{
      							
								$(flds0).css("color","#FF0000");
								
								flag = false;
    						}
							if(!flag)
							 return false;
							var dv = document.getElementById("loginerror")
							//alert(url + "/admin/login/admin_login");
          					loadDoc(url + "/admin/login/admin_login", dv,flds1.value,flds0.value)
 							
 						}
						
					function loadDoc(url, elem,pass,email) {
					//alert("clicked");
    					if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        					xmlhttp = new XMLHttpRequest();
    					}
    					else {// code for IE6, IE5
        					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    					}
    					xmlhttp.onreadystatechange = function () {
       						 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							 	var check = xmlhttp.responseText;
								//alert(check);
								if(check=='1')
								{
									window.location.replace("home");	
								}
								else
								{
           						    elem.innerHTML = 'user or password is not valid';
								}
        					}
    					}
    					xmlhttp.open("POST", url, true);
						xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    					xmlhttp.send("password=" + pass + "&email=" + email);
					}
</script>





<div class="centerdiv">
		<div class="headingtext">Admin Login</div>
		<div class="subdiv">
       			 <div class="logintext">
				  
						<div class="errtext" style="display:block" id="loginerror"></div>
				  
				  </div>
			<form id="frmlogin" name="frmlogin" method="post">
			<div class="labelheight" style="margin-top:28px">
				<div class="labeldiv"><label for="txtusername" class="label">User Email:</label></div>
				<div  class="labeldiv" style="float:left;"><input type="text" name="txtuseremail" id="txtuseremail" class="txtform"/></div>
				</div>
				<div class="labelheight" style="float:left">
				<div class="labeldiv" style="float:left;"><label for="txtpassword" class="label">Password:</label></div>
				<div class="labeldiv" style="float:left;"><input type="password" name="txtpassword" id="txtpassword" class="txtform"/></div>
				</div>
				<div class="labelheight" style="float:left; padding-top: 0px;"><input type="button" value="Login" class="loginbtn"  onclick="return loginvalidation('<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
');"/></div> 
			</form>
		
		</div>
	</div>