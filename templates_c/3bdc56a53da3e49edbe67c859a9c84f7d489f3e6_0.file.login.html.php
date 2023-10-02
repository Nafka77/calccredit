<?php
/* Smarty version 4.3.1, created on 2023-10-02 23:03:20
  from 'C:\xampp\htdocs\calccredit\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651b30185c6475_40826996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bdc56a53da3e49edbe67c859a9c84f7d489f3e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calccredit\\app\\views\\login.html',
      1 => 1695559575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651b30185c6475_40826996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1855013589651b30184decc3_36251257', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1669899673651b30184e5565_25543421', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'footer'} */
class Block_1855013589651b30184decc3_36251257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1855013589651b30184decc3_36251257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1669899673651b30184e5565_25543421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1669899673651b30184e5565_25543421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="banner">
	<div class="inner">
		<h2 class="major">Logowanie</h2>
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
			<div class="fields">
				<div class="field">
					<label for="login">Login: </label>
					<input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
				</div>
				<div class="field">
					<label for="pass">Hasło: </label>
					<input id="pass" type="password" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
" />
				</div>
				<div class="field">
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
		</div>
	</div>
</section>

<?php
}
}
/* {/block 'content'} */
}
