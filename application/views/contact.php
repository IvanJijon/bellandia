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
	<div id="contact">
		<div class="msg">
			<?php if (isset($message_display)) { echo $message_display; } ?>
		</div>
		<form id="contact-form" action="http://localhost/contact/send_mail" method="post" accept-charset="utf-8">
			
			<div id="contact-input-1">
				<label class="contact-input-label">Nombre＊</label>
				<input type="text" id="name" name="name" required>
			</div>

			<div id="contact-input-2">
				<label class="contact-input-label">Correo electrónico＊</label>
				<input type="text" id="email" name="user_email" required>
			</div>

			<div id="contact-mensaje">
				<label class="contact-input-label">Su mensaje＊</label>
				<textarea id="text" cols="58" name="message" rows="10" placeholder="Escriba aquí su mensaje." required></textarea>
			</div>

			<input id="contact-button" type="submit" name="submit" value="ENVIAR" class='submit' /> </div>

		</form>
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

<?php 
include("inc/home-footer.php");
?>
