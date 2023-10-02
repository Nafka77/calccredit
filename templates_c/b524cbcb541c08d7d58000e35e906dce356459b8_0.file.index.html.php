<?php
/* Smarty version 4.3.1, created on 2023-09-22 16:02:06
  from 'C:\xampp\htdocs\nauka\Aga\app\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650d9e5e62ec71_57352001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b524cbcb541c08d7d58000e35e906dce356459b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nauka\\Aga\\app\\views\\index.html',
      1 => 1695391324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650d9e5e62ec71_57352001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_732444543650d9e5e5fdb09_27241546', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148614390650d9e5e5fe947_01243284', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'footer'} */
class Block_732444543650d9e5e5fdb09_27241546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_732444543650d9e5e5fdb09_27241546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_148614390650d9e5e5fe947_01243284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148614390650d9e5e5fe947_01243284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="banner">
	<div class="inner">
		<h2 class="major">Kalkulator</h2>
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
			<div class="fields">
				<div class="field">
					<label for="id_amoun">Podaj kwote: </label>
					<input id="id_amoun" type="text" name="amoun" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amoun;?>
" />
				</div>
				<div class="field">
					<label for="id_years">Na ile miesięcy: </label>
					<input id="id_years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" />
				</div>
				<div class="field">
					<label for="id_interest_rate">Jakie oprocentowanie (w procentach): </label>
					<input id="id_interest_rate" type="text" name="interest_rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest_rate;?>
" /><br />
					<input type="submit" value="Wylicz" />
				</div>
			</div>
		</form>
		<div>
						<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
				<h4>Wystąpiły błędy: </h4>
				<ol class="err">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			<?php }?>
			
						<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
				<h4>Informacje: </h4>
				<ol class="inf">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
				<h4>Wynik</h4>
				<p class="res">
				<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

				</p>
			<?php }?>
		</div>
	</div>
</section>

<?php
}
}
/* {/block 'content'} */
}
