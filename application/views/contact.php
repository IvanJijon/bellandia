<?php
include("inc/header.php");
?>

</head>

<body>

<?php
include("inc/menu-scroll.php");
?>


<div class="content"> 
	<h1 style="margin-bottom: 55px;">
		CONTÁCTENOS
	</h1>
<!-- 	<iframe id="maps"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6434393766463!2d-77.98323368512438!3d-1.3904925361412062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d3e3b6f537fa95%3A0x742c57ab73fb069e!2sBellandia+Lodge!5e0!3m2!1sfr!2sfr!4v1458068009308" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 -->

 	<div id="contact">
		<div id="contact-input01">
			<label class="contact-input-label">Nombre＊</label>
			<input type="text" id="name" name="name">
		</div>
		<div id="contact-input02">
			<label class="contact-input-label">Correo electrónico＊</label>
			<input type="text" id="email" name="email">
		</div>
	 	<div id="contact-mensaje">
			<label class="contact-input-label">Su mensaje＊</label>
			<textarea id="text" cols="73" rows="10" placeholder="Escriba aquí su mensaje." required=""></textarea>
		</div>
	</div>



	<!-- <div id="contact">
		<h3>
			BELLANDIA LODGE
		</h3>
		<div> El Puyo - Ecuador
		Dirección : Km 21, Vía Puyo Km 6 Vía a Boayacu, Tena, Ecuador
		Teléfonos : +593996009781
		Mail : demo@bellandia.com
	</div> -->
	</div>

</div>

<div class="content">
	<h1 style="margin-bottom: 55px;">
		CONTACTO
	</h1>

	<div class="main">
		<div id="content">
			<h2 id="form_head">CONTACTO</h2>
			<div id="form_input">
				<div class="msg">
					<?php if (isset($message_display)) { echo $message_display; } ?>
				</div>
				<?php 
				echo '<div class="error_msg">'; 
				echo validation_errors(); 
				echo "</div>"; 
				echo form_open( 'contact/send_mail'); 
				
				echo form_label('Name'); 
				echo "<div class='all_input'>"; 
				$data_email = array( 'name' => 'name', 'class' => 'input_box', 'placeholder' => 'Por favor ingrese su Nombre' ); 
				echo form_input($data_email); 
				echo "</div>"; 
				
				echo form_label( 'Email-ID'); 
				echo "<div class='all_input'>"; 
				$data_email=array( 'type'=> 'email', 'name' => 'user_email', 'id' => 'e_email_id', 'class' => 'input_box', 'placeholder' => 'Por favor ingrese su Email' ); 
				echo form_input($data_email); 
				echo "</div>";
				
				echo form_label('Message');
				echo "<div class='all_input'>"; 
				$data_message = array( 'name' => 'message', 'rows' => 8, 'cols' => 50 ); 
				echo form_textarea($data_message); 
				echo "</div>"; ?>
		</div>
		<div id="form_button">
			<?php echo form_submit( 'submit', 'Send', "class='submit'"); ?>
		</div>
		<?php echo form_close(); ?>
	</div>
	</div>
	
	
</div>

</div>


<?php 
include("inc/home-footer.php");
?>
