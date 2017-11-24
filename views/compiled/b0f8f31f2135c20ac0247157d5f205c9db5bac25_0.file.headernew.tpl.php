<?php
/* Smarty version 3.1.30, created on 2017-03-14 11:16:29
  from "C:\wamp\www\BAE\ModalOefeningen\myBand2\views\headernew.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7c2fdde4485_99704191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f8f31f2135c20ac0247157d5f205c9db5bac25' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\ModalOefeningen\\myBand2\\views\\headernew.tpl',
      1 => 1478187364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7c2fdde4485_99704191 (Smarty_Internal_Template $_smarty_tpl) {
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
			<img src="img/searchicon.png" width="30" height="30">
			<input type="text" name="Search" placeholder="Search Articles">
		</div>
		

	</div>
	

</header>

<?php }
}
