<?php
/* Smarty version 3.1.30, created on 2022-07-05 21:11:12
  from "C:\xampp\htdocs\php_05\app\calc\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62c48cd0d0ea77_10331258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b47f605ab02007888bf62cb21ae9c79156fcf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05\\app\\calc\\CalcView.tpl',
      1 => 1657048260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c48cd0d0ea77_10331258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133857949862c48cd0d000d2_92398577', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121814293562c48cd0d0e2f4_76759071', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_133857949862c48cd0d000d2_92398577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_121814293562c48cd0d0e2f4_76759071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



	<div class="container">
		<div class="row">
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Podaj parametry</h1>
				</header>
				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="x" type="text" placeholder="Kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Procent" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->intrest;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="btn btn-action" type="submit" value="Oblicz ratę">
							</div>
						</div>
					</form>

			</article>
		</div>
                <div class ="row">
                    <article class="col-sm-4 maincontent">
                        
                        
                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                                <h4>Wystąpiły błędy: </h4>
                                <ol class="err">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ol>
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                                <h4>Informacje: </h4>
                                <ol class="inf">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ol>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
                                <h4>Wynik</h4>
                                <p class="res">
                                <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                                </p>
                        <?php }?>

                    </article>
                </div>
	</div>	<!-- /container -->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/jquery.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/bootstrap.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/headroom.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/jQuery.headroom.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/template.js.pobrane"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
