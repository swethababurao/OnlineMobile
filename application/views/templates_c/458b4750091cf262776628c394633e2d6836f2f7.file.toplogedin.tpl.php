<?php /* Smarty version Smarty-3.0.7, created on 2012-05-20 15:00:23
         compiled from "application/views/templates\htmlincludes/toplogedin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289194fb8eae71f7c51-04426626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '458b4750091cf262776628c394633e2d6836f2f7' => 
    array (
      0 => 'application/views/templates\\htmlincludes/toplogedin.tpl',
      1 => 1337518762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289194fb8eae71f7c51-04426626',
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
                            <li id="lilogin"><?php echo $_smarty_tpl->getVariable('username')->value;?>
 | <span> <a href="<?php echo $_smarty_tpl->getVariable('suburl')->value;?>
/userhome/logout" title="logout">Logout</a></span></li>
                            <li id="shopping_cart"><a href="#" title="Shoping Cart">Cart: </a><span class="cart_no_product">(empty)</span></li>
                        </ul>
                    </div>
                	<ul id="header_links">
                    	<li>	
                        	<a href="#" title="Home">Home</a>
                            <span>|</span>
                        </li>
                        <li>	
                        	<a href="#" title="Home">Customer Service</a>
                            <span>|</span>
                        </li>
                        <li>	
                        	<a href="#" title="Home">Contact Us</a>
                            
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