<?php
/* Smarty version 3.1.30, created on 2017-07-10 12:06:21
  from "C:\wamp\www\BAE\ModalOefeningen\myBand2\views\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5963519da71e06_12691538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f21716a906d09884b2ed6793cfc64efc3163903' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\ModalOefeningen\\myBand2\\views\\contact.tpl',
      1 => 1478118516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5963519da71e06_12691538 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contact">
	<h1>CONTACT US</h1>
	<div class="contactwrapper">
		
		<div class="form">
			<form action="includes/form.php" method="POST" >
				<label>YOUR NAME</label>
				<input type="text"  name="name" class="contactforminput">
				<label>YOUR EMAIL</label>
				<input type="text"  name="email" class="contactforminput">
				<label>SUBJECT</label>
				<input type="text" name="subject" class="contactforminput">
				<label>YOUR MESSAGE</label>
				<textarea rows="15" cols="50" name="message">
					
				</textarea> 
				<input type="submit" name="submit" value="SUBMIT" class="submitbutton">
			</form>
		</div>

		<div class="contactinfo" onload="load()">
			
			<h3>CONTACT INFO</h3>

			<div>
				<img src="img/mailicon.png" width="20" height="20">
				<h4>TIME2WATCH@GMAIL.COM</h4>
			</div>

			<div>
				<img src="img/phoneicon.png" width="20" height="20">
				<h4>015-1234567</h4>
			</div>

			<div>
				<img src="img/adressicon.png" width="20" height="20">
				<h4>CHOPINLAAN 123, 1234 DELFT</h4>
			</div>

			<div>
				<img src="img/time.png" width="20" height="20">
				<h4>09:00 - 17:30</h4>
			</div>

			<h3></h3>

			<div>
				 <iframe width="216" height="177" src="https://www.youtube.com/embed/ynTB211p1PQ" frameborder="0" allowfullscreen></iframe>
				<iframe width="216" height="177" src="https://www.youtube.com/embed/ewRrWq7w_Hs" frameborder="0" allowfullscreen></iframe>														
			</div>

		</div>

	</div>

</div><?php }
}
