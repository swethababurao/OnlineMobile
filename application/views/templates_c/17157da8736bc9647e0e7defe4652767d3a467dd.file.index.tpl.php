<?php /* Smarty version Smarty-3.0.7, created on 2012-03-21 22:33:02
         compiled from "application/views/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212644ef9ffadf2c442-76847246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17157da8736bc9647e0e7defe4652767d3a467dd' => 
    array (
      0 => 'application/views/templates\\index.tpl',
      1 => 1323961266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212644ef9ffadf2c442-76847246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  <div class="maindiv">
  
  		<?php $_template = new Smarty_Internal_Template("htmlincludes/top.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		
  		<?php $_template = new Smarty_Internal_Template("htmlincludes/searchbox.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		  
		 <!-- main content -->
        <div id="topcontentdiv" class="topcontent">
  		<?php $_template = new Smarty_Internal_Template("htmlincludes/leftmenu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		
  		<?php $_template = new Smarty_Internal_Template("htmlincludes/content.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		</div>
		
  		<?php $_template = new Smarty_Internal_Template("htmlincludes/bottom.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>