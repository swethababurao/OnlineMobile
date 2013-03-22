<?php /* Smarty version Smarty-3.0.7, created on 2012-05-25 15:34:43
         compiled from "application/views/templates\admin/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196994fbf8a73a11785-68465866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a80391f1e4ebaa9eb4541a022f9de5e188f793a' => 
    array (
      0 => 'application/views/templates\\admin/home.tpl',
      1 => 1337952880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196994fbf8a73a11785-68465866',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("admin/includes/headerhtml.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
 <?php $_template = new Smarty_Internal_Template("admin/includes/topheader.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
 <?php $_template = new Smarty_Internal_Template("admin/includes/topmenu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

  <div id="topcontentdiv" class="contentarea">
 <?php $_template = new Smarty_Internal_Template("admin/includes/leftmenu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
 
<div id="contentcolumn" class="contentarea">
			
				<div class="contenttoper">Site User Information</div>
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
                <?php  $_smarty_tpl->tpl_vars['users'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['users']->key => $_smarty_tpl->tpl_vars['users']->value){
?>
				<div class="wrapper2"> 
					<div class="left_column2"> 
						<?php echo $_smarty_tpl->getVariable('users')->value->full_name;?>

					</div> 
					<div class="content2"> 
						<?php echo $_smarty_tpl->getVariable('users')->value->email;?>

					</div> 
					<div class="right_column2"> 
						<?php echo $_smarty_tpl->getVariable('users')->value->address;?>

					</div> 
					<hr /> 
				</div>
				<?php }} ?>
          </div>
 </div>
		
 <?php $_template = new Smarty_Internal_Template("admin/includes/footerhtml.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('url',($_smarty_tpl->getVariable('url')->value));$_template->assign('title',($_smarty_tpl->getVariable('title')->value)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		