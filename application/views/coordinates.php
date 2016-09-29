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
		<?php echo $this->lang->line('coordinates-coordinates');?>
	</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2042185.4363210362!2d-79.101650397082!3d-1.3904978989858756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d3e3b6f537fa95%3A0x742c57ab73fb069e!2sBellandia+Lodge!5e0!3m2!1sfr!2sfr!4v1458515481997" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	<div id="coordinates">
		<h3>
			<?php echo $this->lang->line('coordinates-bellandia-lodge-caps');?>
		</h3>
		<div> <h4>
		<strong><?php echo $this->lang->line('coordinates-address');?></strong><?php echo $this->lang->line('coordinates-address-desc');?></br>
		<strong><?php echo $this->lang->line('coordinates-phone');?></strong><?php echo $this->lang->line('coordinates-phone-desc');?></br>
		<strong><?php echo $this->lang->line('coordinates-mail');?></strong><?php echo $this->lang->line('coordinates-mail-desc');?></br>	
		</h4></div>
	</div>

</div>

<?php 
include("inc/home-footer.php");
?>
