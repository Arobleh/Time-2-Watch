<?php
/* Smarty version 3.1.30, created on 2017-03-14 11:16:29
  from "C:\wamp\www\BAE\ModalOefeningen\myBand2\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7c2fde4af62_79768561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ecddb2ba9dc97a7c311447719f94d5c551e8dd' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\ModalOefeningen\\myBand2\\about.tpl',
      1 => 1478080262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7c2fde4af62_79768561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
		<div class="aboutheader">
			<h1>ABOUT THE BLOG</h1>
		</div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result2']->value, 'oneItem2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem2']->value) {
?>
		<div id="aboutcontent">
			<div>
			<p><?php echo $_smarty_tpl->tpl_vars['oneItem2']->value['content'];?>
</p>
			</div>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section><?php }
}
