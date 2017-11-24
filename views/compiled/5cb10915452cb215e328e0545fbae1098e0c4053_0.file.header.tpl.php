<?php
/* Smarty version 3.1.30, created on 2017-02-25 17:38:25
  from "C:\wamp\www\BAE\myBand2\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b1b301156c87_25645685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb10915452cb215e328e0545fbae1098e0c4053' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\header.tpl',
      1 => 1487958208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b1b301156c87_25645685 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<div id="menu">
		<div class="headerlogo">
			<img src="img/headerlogo.png" width="200" height="150">
		</div>
		<div class="socailicons">
				<img src="img/fb.png" width="35" height="35">
				<img src="img/twit.png" width="35" height="35">
				<img src="img/insta.png" width="35" height="35">
		</div>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result3']->value, 'oneMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneMenu']->value) {
?>
				<li><a href="?action=<?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page'];?>
</a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
		<div class="search">
			<form>
			<input type="text" name="Search" placeholder="Search Articles">
			<img src="img/searchicon.png" width="30" height="30">
			/<form>
		</div>


	</div>

	<div class="buttons">
	<img src="img/back.png" width="30" height="56" id="backward" />
	<img src="img/next.png" width="30" height="56" id="forward" />
    </div>

	<div class="headerimg">

			<img src="img/headerimg.jpg" id="slide1">
	</div>


</header>
<?php }
}
