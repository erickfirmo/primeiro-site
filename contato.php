<?php 
	include 'partials/_head.php'; 
	include 'partials/_topbar.php';
	include 'partials/_header.php';
?>

<div id="contato" class="container-fluid">
	<h3>CONTATO</h3>
</div>

<div class="container">
	<div class="row linha">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<?php
				include 'partials/_contact-form.php';
			?>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<?php
include "partials/_maps.php";
include "partials/_scripts.php";
include "partials/_footer.php"; ?>