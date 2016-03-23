<?php
include("inc/header.php");
?>

</head>

<body>

<?php
include("inc/menu-scroll.php");
?>


<div class="content"> 
	<h1>
		CONTÁCTENOS
	</h1>
	<div id="contact">
		<div class="msg">
			<?php if (isset($message_display)) { echo $message_display; } ?>
		</div>
		<form id="contact-form" action="http://localhost/contact/send_mail" method="post" accept-charset="utf-8">
			
			<div class="contact-input">
				<label class="label">Nombre＊</label>
				<input type="text" class="input" name="name" required>
			</div>

			<div class="contact-input">
				<label class="label">Correo electrónico＊</label>
				<input type="text" class="input" name="user_email" required>
			</div>

			<div id="contact-mensaje">
				<label class="label">Su mensaje＊</label>
				<textarea id="text" cols="58" name="message" rows="10" placeholder="Escriba aquí su mensaje." required></textarea>
			</div>

			<input id="contact-button" type="submit" name="submit" value="ENVIAR" class='submit' /> </div>

		</form>
	</div>

</div>

<?php 
include("inc/home-footer.php");
?>
