<?php
include("inc/header.php");

include("inc/menu-scroll.php");

?>

<?php

//TEST connection BDD
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
?>

<div class="content">
	<h1 style="margin-bottom: 55px;">
		ACTIVIDADES
	</h1>

	<!-- Loop sobre las actividades -->
		{@math key=$idx method="mod" operand=2}
			{@eq value=0}
				<div class="description-content-row clear-fix">
					<div class="img-panel left"><img src="/public/assets/img/activities/{img}" alt="{name}"/></div>
					<div class="description-panel right">
						<h2>{name}</h2>

						<p>{description}</p>
					</div>
				</div>
			{:else}
				<div class="description-content-row clear-fix">
					<div class="description-panel left">
						<h2>{name}</h2>

						<p>{description}</p>
					</div>
					<div class="img-panel right"><img src="/public/assets/img/activities/{img}" alt="{name}"/></div>
				</div>
			{/eq}
		{/math}
	{/activities}
</div>

</div>


<?php 
include("inc/home-footer.php");
?>


