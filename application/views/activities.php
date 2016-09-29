<?php
include("inc/header.php");
?>

</head>

<body>

<?php
include("inc/menu-scroll.php");
?>

<?php

/* //TEST connection BDD
$servername = "192.168.1.142";
$username = "bellandia";
$password = "bellandia123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
echo "Connected successfully";
*/

?>

<div class="content">
	<h1 style="margin-bottom: 55px;">
		<?php echo $this->lang->line('activities-activities');?>
	</h1>

	<!-- Loop sobre las actividades -->
		<?php 
		$count = 0;
		foreach ($activities as $activity) {
			if (++$count%2){
		?>
				<div class="description-content-row clear-fix">
					<div class="img-panel left"><img src="<?php echo asset_url(); ?>img/activities/<?php echo $activity->img ?>" alt="<?php echo $activity->name ?>"/></div>
					<div class="description-panel right">
						<h3><?php echo $activity->name ?></h3>

						<p><?php echo $activity->description ?></p>
					</div>
				</div>
		<?php
			}
			else {
		?>
				<div class="description-content-row clear-fix">
					<div class="description-panel left">
						<h3><?php echo $activity->name ?></h3>

						<p><?php echo $activity->description ?></p>
					</div>
					<div class="img-panel right"><img src="<?php echo asset_url(); ?>img/activities/<?php echo $activity->img ?>" alt="<?php echo $activity->name ?>"/></div>
				</div>
		<?php
			}
		}
		?>
	
</div>

</div>


<?php 
include("inc/home-footer.php");
?>
