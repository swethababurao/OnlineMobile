{literal}
					<script language=javascript>
					$(document).ready(function() { 
						
						$("#ddlcat").change(function() 
						{ 
							var message_index 
					 		var url = $("#suburl").val();
							var catid = $("#ddlcat").val(); 
							changecategory(url,catid);
						});
						/*$("#ddlbrands").change(function() 
						{ 
							alert("clicked");
							var message_index 
					 		var url = $("#suburl").val();
							var brdid = $("#ddlbrands").val(); 
							changemodel(url,brdid);
						});*/
					
					});
					function changemodel(url,brdid)
 						{
							
							//var url = $("#suburl").val();
							//var brdid = $("#ddlbrands").val(); 
							
							//var flag = true;
 							//var flds0 =  document.getElementById('txtcategory');
							var dv =  document.getElementById('modelddldiv');
							//alert("value changed");
							//alert(url +"/managemodels/loadmodelddl");
							
          					loadmodelddls(url +"/managemodels/loadmodelddl", dv,brdid)
 							
 						}
						
					function loadmodelddls(url, elem,brdid) {
						
    					if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        					xmlhttp = new XMLHttpRequest();
    					}
    					else {// code for IE6, IE5
        					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    					}
    					xmlhttp.onreadystatechange = function () {
       						 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							 	//alert("respose here");
           						 elem.innerHTML = xmlhttp.responseText;
        					}
							
    					}
    					xmlhttp.open("POST", url, true);
						xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    					xmlhttp.send("brdid=" + brdid);
					}
						function changecategory(url,catid)
 						{
							if(catid == "no-val")
								{
									return;
								}
							//var flag = true;
 							//var flds0 =  document.getElementById('txtcategory');
							var dv =  document.getElementById('brandddldiv');
							//alert("value changed");
							
							
          					loadbrandddls(url +"/managebrand/loadbrandddl", dv,catid)
 							
 						}
						
					function loadbrandddls(url, elem,cat) {
						
    					if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        					xmlhttp = new XMLHttpRequest();
    					}
    					else {// code for IE6, IE5
        					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    					}
    					xmlhttp.onreadystatechange = function () {
       						 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							 	//alert("respose here");
           						 elem.innerHTML = xmlhttp.responseText;
								 //alert("now binding");
								// $('#brandddldiv select').bind('change', changemodel());
								 $("#ddlbrands").change(function() 
								{ 
									//alert("clicked");
									var message_index 
									var url = $("#suburl").val();
									var brdid = $("#ddlbrands").val(); 
									changemodel(url,brdid);
								});
        					}
							
    					}
    					xmlhttp.open("POST", url, true);
						xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    					xmlhttp.send("categ=" + cat);
					}
					</script>
					{/literal}
