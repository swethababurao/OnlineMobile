
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

{include file="admin/includes/catcontenct.tpl" url="$url" title="$title"}

 </div>
		
{* include the footer html .... *}
 {include file="admin/includes/footerhtml.tpl" url="$url" title="$title"}
		