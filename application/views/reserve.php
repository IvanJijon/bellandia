<?php
include("inc/header.php");
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker-arrival" ).datepicker();
  });
  $(function() {
    $( "#datepicker-departure" ).datepicker();
  });
  </script>
</head>

<body>

<?php
include("inc/menu-scroll.php");
?>


<div class="content"> 
	<h1>
		RESERVAR
	</h1>
	<div class="msg">
		<?php if (isset($message_display)) { echo $message_display; } ?>
	</div>
		
		<form id="contact-form" action="http://localhost/contact/send_mail" method="post" accept-charset="utf-8">
			
			<div id="date">
				<div class="contact-input">
					<label class="label">Fecha de entrada</label>
					<input type="text" id="datepicker-arrival">
				</div>
				<div class="contact-input">
					<label class="label">Fecha de salida</label>
					<input type="text" id="datepicker-departure">
				</div>
			</div>

			<div class="contact-input">
				<label class="label">Nombre＊</label>
				<input type="text" class="input" name="name" required>
			</div>
			
			<div class="contact-input">
				<label class="label">Apellido＊</label>
				<input type="text" class="input" name="name" required>
			</div>
			
			<div class="contact-input">
				<label class="label">Correo electrónico＊</label>
				<input type="text" class="input" name="user_email" required>
			</div>

			<div class="contact-input">
				<label class="label">Número de adultos</label>
				<input type="text" class="input" name="user_email" required>
			</div>

			<div class="contact-input">
				<label class="label">Número de niños</label>
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
