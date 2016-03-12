<?php
include("inc/header.php");
?>

</head>

<body>

<?php
include("inc/menu-scroll.php");
?>


<div class="content">
	<h1>HABITACIONES</h1>

	<p class="element-menu">	
	<?php 
	foreach ($rooms as $room) {
	?>
		<a href="/rooms/index/<?php echo $room->id ?>" title="<?php echo $room->name ?>" <?php echo $cRoom == $room->id ? "class=\"current\"" : "" ?>><?php echo $room->name ?></a>
	<?php 
	}
	?>
	</p>

	<?php 
	foreach ($rooms as $room) {
		if ($cRoom == $room->id) {
	?>
	
	<img src="<?php echo asset_url(); ?>img/rooms/<?php echo $room->img ?>" alt="<?php echo $room->name ?>" style="width: 940px; margin-bottom: 35px;" />

	<p class="description-header clear-fix">
		<span class="left"><?php echo $room->name ?></span>
		<a href="#" class="button right">RESERVA AHORA</a>
	</p>

	<ul class="description-list">
				<?php 
				$features = json_decode_special_chars($room->features);
				//dump($features);
				foreach ($features as $feature) {
				?>		
		<li><?php echo $feature ?></li>		
				<?php 
				}
				?>
	</ul>

	<div class="description-image-row clear-fix">
		<?php 
		foreach ($rooms as $room) {
			if ($cRoom != $room->id) {
		?>
			<a href="/rooms/index/<?php echo $room->id ?>"><img src="<?php echo asset_url(); ?>img/rooms/<?php echo $room->img ?>" alt="<?php echo $room->name ?>" /><?php echo $room->name ?></a>
		<?php
			}
		}
		?>
	</div>
	
	<?php 
		}
	}
	?>
	
</div>



<?php 
include("inc/home-footer.php");
?>
