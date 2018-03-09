<?php 
include 'partials/_head.php'; 
include 'partials/_topbar.php';
include 'partials/_header.php'; ?>

<session id="session">
	<div class="container-fluid">
		<div class="row session">

			<?php
			include 'partials/_contact-form.php';
			include 'partials/_sidebar.php'; ?>

		</div>
	</div>

	<div class="container-fluid">
		<div class="row linha-vermelha">
		
		<div class="col-md-3 box">
				<img src="img/icon-desenvolvimento.png" class="img-fluid">
				
				</div>
				
			<div class="col-md-3 box">
				<img src="img/google_adwords_logo.png" class="img-fluid">
				</div>


			<div class="col-md-3 box">
				<img src="img/chaves-logo.png" class="img-fluid">
				</div>

				

			<div class="col-md-3 box">
				<img src="img/java-logo.png" class="img-fluid">
				</div>
		</div>
	</div>
</session>

<?php
include "partials/_scripts.php";
include "partials/_footer.php"; ?>