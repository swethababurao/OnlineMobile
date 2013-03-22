
{* include header basic javascript css and other .... *}

{include file="includes/header.tpl" url="$url" title="$title"}

{* All the divs every thing will be in this div .... *}
  <div class="maindiv">
  
  		{* to inclucde to the top logo portion .... *}
  		{include file="htmlincludes/top.tpl" url="$url" title="$title"}
		
		{* include the search portion and banner .... *}
  		{include file="htmlincludes/searchbox.tpl" url="$url" title="$title"}
		  
		 <!-- main content -->
        <div id="topcontentdiv" class="topcontent">
  		{* include the left link of the html .... *}
  		{include file="htmlincludes/leftmenu.tpl" url="$url" title="$title"}
		
		{* include the main contact of the html .... *}
  		{include file="htmlincludes/signinerror.tpl" url="$url" title="$title"}
		</div>
		
		{* include the footer of the site .... *}
  		{include file="htmlincludes/bottom.tpl" url="$url" title="$title"}
  </div>

{* include the colosing tags of body and html .... *}

{include file="includes/footer.tpl" url="$url" title="$title"}