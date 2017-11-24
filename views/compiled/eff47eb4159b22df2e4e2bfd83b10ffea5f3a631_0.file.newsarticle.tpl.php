<?php
/* Smarty version 3.1.30, created on 2017-03-14 11:14:29
  from "C:\wamp\www\BAE\ModalOefeningen\myBand2\views\newsarticle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c7c285c6eef6_27819546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff47eb4159b22df2e4e2bfd83b10ffea5f3a631' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\ModalOefeningen\\myBand2\\views\\newsarticle.tpl',
      1 => 1478181142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7c285c6eef6_27819546 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\BAE\\ModalOefeningen\\myBand2\\libs\\plugins\\modifier.date_format.php';
?>
<div class="contenttitle">
</div>
<section class="homepagecontent">
	<div class="articlemap">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
		
		<article>
			<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
			<h3><em>Uploaded : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B, %Y");?>
</em></h3>
			<img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
			<p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
		</article>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<div class="pagination">
		<ul >
			<li><a href="?action=home&page_nr=1">1</a></li>
			<li><a href="?action=home&page_nr=2">2</a></li>
			<li><a href="?action=home&page_nr=3">3</a></li>
			<li><a href="?action=home&page_nr=4">4</a></li>
			<li><a href="?action=home&page_nr=5">5</a></li>
		</ul>
	</div>
	</div>
</section>
<?php }
}
