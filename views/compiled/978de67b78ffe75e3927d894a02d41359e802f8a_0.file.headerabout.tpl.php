<?php
/* Smarty version 3.1.30, created on 2016-11-02 14:25:33
  from "C:\wamp\www\BAE\myBand2\views\headerabout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5819e94daaaa69_42265962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978de67b78ffe75e3927d894a02d41359e802f8a' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\headerabout.tpl',
      1 => 1478091800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5819e94daaaa69_42265962 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result3']->value, 'oneMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneMenu']->value) {
?>
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
			<li><a href="?action=home"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page1'];?>
</a></li>
			<li><a href="?action=about"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page2'];?>
</a></li>
			<li><a href="?action=new"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page3'];?>
</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>

	</div>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</header>

<?php }
}
