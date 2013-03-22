<?php /* Smarty version Smarty-3.0.7, created on 2012-05-26 17:02:59
         compiled from "application/views/templates\querysaved.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97854fc0f0a37baca2-36423955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8fcf22c1cfa0d9ff60f0d90bf9d3e0f458f8d92' => 
    array (
      0 => 'application/views/templates\\querysaved.tpl',
      1 => 1338044081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97854fc0f0a37baca2-36423955',
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
		
  		<?php $_template = new Smarty_Internal_Template("htmlincludes/querysaved.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		</div>
		
  		<?php $_template = new Smarty_Internal_Template("htmlincludes/bottom.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>