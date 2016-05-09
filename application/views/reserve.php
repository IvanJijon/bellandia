<?php
include("inc/header.php");
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker-arrival" ).datepicker({ dateFormat: 'dd/mm/yy' });
  
    $( "#datepicker-departure" ).datepicker({ dateFormat: 'dd/mm/yy' });
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
	<form id="contact-form" action="http://localhost/reserve/send_mail_reserve" method="post" accept-charset="utf-8">				<div id="date">
		<hr>
		<div class="price">
			<p><strong>Precio por Cabañas</strong></p>
			(Desayuno y actividades incluidas)</br></br>
			<strong>1 persona</strong> $80/noche*</br>
			<strong>2 personas</strong> $140/noche*</br>
			<strong>3 personas</strong> $189/noche*</br>
			<strong>4 personas</strong> $210/noche*</br>
			*Precios no incluyen IVA.
		</div>	
		<hr>
		<div class="contact-input">
			<label class="label">Fecha de entrada</label>
			<input type="text" name="datepicker-arrival" id="datepicker-arrival">
		</div>
		<div class="contact-input">
			<label class="label">Fecha de salida</label>
			<input type="text" name="datepicker-departure" id="datepicker-departure">
		</div>

		<div class="contact-input">
			<label class="label">Nombre＊</label>
			<input type="text" class="input" name="name" required>
		</div>
				
		<div class="contact-input">
			<label class="label">Apellido＊</label>
			<input type="text" class="input" name="surname" required>
		</div>
				
		<div class="contact-input">
			<label class="label">Correo electrónico＊</label>
			<input type="text" class="input" name="user_email" required>
		</div>

		<div class="contact-input">
			<label class="label">Número de adultos*</label>
			<input type="text" class="input" name="adults" required>
		</div>

		<div class="contact-input">
			<label class="label">Número de niños</label>
			<input type="text" class="input" name="kids">
		</div>
				
		<div id="contact-mensaje">
			<label class="label">Precisiones＊</label>
			<textarea id="text" cols="58" name="message" rows="10" placeholder="Escriba aquí su mensaje." required></textarea>
		</div>
		<input id="contact-button" type="submit" name="submit" value="ENVIAR" class='submit' /> </div>
	</form>
</div>

<?php 
include("inc/home-footer.php");
?>
