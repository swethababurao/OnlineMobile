<?php /* Smarty version Smarty-3.0.7, created on 2012-06-03 13:23:50
         compiled from "application/views/templates\htmlincludes/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76804fcb4946ed90c7-46659098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96649d7efe57bbfa339aede3916bba7fbd071682' => 
    array (
      0 => 'application/views/templates\\htmlincludes/top.tpl',
      1 => 1338722623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76804fcb4946ed90c7-46659098',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- header div ..... -->
    	<div class="logodiv">
        	 <div style="widht:800px;float:left">
                 <div class="logoback">
                 	<div class="logofont">MyTrendyPhone</div>
                </div> 
                <div class="topmenuback">
                	<div id="cartmenu">
                        <ul>
                            <li id="lilogin">
                            
                            
                            <a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/usersignin" title="Sign In">Sign In</a> | 
                            <span> <a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/userregistration" title="New User">New User</a></span></li>
                            <li id="shopping_cart"><a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/emptycart" title="Shoping Cart">Cart: </a><span class="cart_no_product">(<?php echo $_smarty_tpl->getVariable('cart')->value;?>
)</span></li>
                        </ul>
                    </div>
                	<ul id="header_links">
                    	<li>	
                        	<a href="/tm" title="Home">Home</a>
                            <span>|</span>
                        </li>
                        <li>	
                        	<a href="#" title="Home">Customer Service</a>
                            <span>|</span>
                        </li>
                        <li>	
                        	<a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/contact_us" title="Home">Contact Us</a>
                            
                        </li>
                       
                    </ul>
                </div>
               
            </div>
            
            <div class="topmenuright"> 
            </div>
            <div class="searchbg">
            
            </div>
        </div>
    	<!-- end of header div -->