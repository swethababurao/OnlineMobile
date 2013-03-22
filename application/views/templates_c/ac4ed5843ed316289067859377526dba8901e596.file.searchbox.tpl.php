<?php /* Smarty version Smarty-3.0.7, created on 2012-06-04 13:37:15
         compiled from "application/views/templates\htmlincludes/searchbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135224fcc9debbc06a2-39936109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4ed5843ed316289067859377526dba8901e596' => 
    array (
      0 => 'application/views/templates\\htmlincludes/searchbox.tpl',
      1 => 1338809128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135224fcc9debbc06a2-39936109',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Search div -->
        <div class="searchandweb">
        	<div id="searchpannel" class="searchpannel">
            	<div id="searchleftcorner" class="searchleftcorner"></div>
                
                
                <form name="showp" action="index.php/userhome/product_details_by_model" type="get" id="formSearchFriend">
                
                <div id="searchcenterportion" class="searchcenterportion">
                	<div id="centerlinesearch"  class="centerlinesearch"> 
                	
                    <input type="text" onblur="if(this.value=='')this.value='Enter search keywords here';" onfocus="if(this.value=='Enter search keywords here')this.value='';" value="Enter search keywords here" name="search_query" id="autocomplete" class="search_query">
                    
                    <label class="search_block_top">Search</label>
                    <input type="submit" name="submit" value="Search" id="searchbox"/>
                    </div>
                    
                    <div id="searchrightcorner" class="searchrightcorner"></div>
                </div>
                </form>	
            </div>
            <div id="newwebsite">
                 <li>	
                        	<a href="http://reviews.cnet.com/" target="_blank" title="browse"><img src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
css/images/cnet.gif" title="http://reviews.cnet.com/"/></a>
                            
                 </li>
            	
           
          </div>
        </div>
        <!-- end of search div -->