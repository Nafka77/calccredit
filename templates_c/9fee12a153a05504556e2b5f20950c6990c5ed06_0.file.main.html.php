<?php
/* Smarty version 4.3.1, created on 2023-09-26 10:56:42
  from 'C:\xampp\htdocs\calccredit\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65129ccac2cae4_35895655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fee12a153a05504556e2b5f20950c6990c5ed06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calccredit\\app\\views\\templates\\main.html',
      1 => 1695559575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65129ccac2cae4_35895655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kalkulator kredytowy </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

	<!-- Page Wrapper -->
		<div id="page-wrapper">

	<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow">Nafka</a></h1>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
			<nav id="menu">
				<div class="inner">
					<h2>Menu</h2>
					<ul class="links">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow">Home</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Log In</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Log out</a></li>
					</ul>
				</div>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<div class="logo"><span class="icon fa-gem"></span></div>
					<h2>Nafka wita!</h2>
					<p>Kalkulator kredytowy</p>
				</div>
			</section>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151721697365129ccac2a493_35838846', "content");
?>


			<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<ul class="copyright">
						<li>&copy; Autor przykładu: NAFKA</li>
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</section>
		</div>

		<!-- Scripts -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block "content"} */
class Block_151721697365129ccac2a493_35838846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151721697365129ccac2a493_35838846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
