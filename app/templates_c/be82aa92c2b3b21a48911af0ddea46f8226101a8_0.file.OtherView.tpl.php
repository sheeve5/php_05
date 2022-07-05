<?php
/* Smarty version 3.1.30, created on 2022-07-05 21:13:49
  from "C:\xampp\htdocs\php_05\app\other\OtherView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62c48d6de20ab6_58693511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be82aa92c2b3b21a48911af0ddea46f8226101a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05\\app\\other\\OtherView.tpl',
      1 => 1657048268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c48d6de20ab6_58693511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122170226062c48d6de1ff17_04109069', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148232179762c48d6de207e2_62029648', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_122170226062c48d6de1ff17_04109069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z drugiego szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_148232179762c48d6de207e2_62029648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
		<div class="row">
        		<header class="page-header">
					<h1 class="page-title">To jest inna strona</h1>
                                        
    				</header>
                </div>		
	</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
