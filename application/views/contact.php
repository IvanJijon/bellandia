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
