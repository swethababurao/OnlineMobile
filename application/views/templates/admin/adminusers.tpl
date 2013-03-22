
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
			
				<div class="contenttoper">Admin User Information</div>
            	<div class="wrapper"> 
					<div class="left_column"> 
						User Name
					</div> 
					<div class="content"> 
						Email
					</div> 
					<div class="right_column"> 
						Address
					</div> 
					<hr /> 
				</div>
				<div class="wrapper2"> 
					<div class="left_column2"> 
						Swetha Baburao
					</div> 
					<div class="content2"> 
						admin@user.com
					</div> 
					<div class="right_column2"> 
						sweden
					</div> 
					<hr /> 
				</div>
				
          </div>
 </div>
		
{* include the footer html .... *}
 {include file="admin/includes/footerhtml.tpl" url="$url" title="$title"}
		