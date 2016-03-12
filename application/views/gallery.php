<?php 
include("inc/header.php");

include("inc/menu-scroll.php");

$array = array("Acceso Minusválidos", "Tienen 1 cuarto y un baño", "Cama Full o twin", "Terraza con hermosa vista a la selva","Capacidad máxima 2 personas", "Baño Privado", "Agua caliente", "Terraza con vista a la selva y a la cordillera");

echo json_encode_special_chars($array);
?>



<div class="content">
	<h1 style="margin-bottom: 55px;">
		El TITULO
	</h1>

				<div class="description-content-row clear-fix">
					<div class="img-panel left"><img src="<?php echo asset_url(); ?>img/activities/1.png" alt="SENDEROS"/></div>
					<div class="description-panel right">
						<h2>SENDEROS</h2>

						<p>Dentro de 30 hectáreas de bosque se distribuyen los senderos, mostrando la vegetación nativa de la zona, su riqueza en plantas medicinales, flores silvestres, orquídeas y aves.</p>
					</div>
				</div>

				<div class="description-content-row clear-fix">
					<div class="description-panel left">
						<h2>CASCADA</h2>

						<p>La confluencia de innumerables arroyos naturales se desborda en una cascada de aproximadamente 60 metros. Disfrutar de la energía del entorno, la brisa y la pureza de sus aguas es una experiencia inolvidable. Se puede acceder a través de un sendero natural en declive que tiene 365 gradas o a través de un sendero simple de 10 minutos de caminata.</p>
					</div>
					<div class="img-panel right"><img src="<?php echo asset_url(); ?>img/activities/1.png" alt="CASCADA"/></div>
				</div>
</div>




<?php 
include("inc/home-footer.php");
?>
