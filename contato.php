<?php 
	include 'partials/_head.php';
	echo "</head>";   
	echo "<body>";
	include 'partials/_topbar.php';
	include 'partials/_header.php'; 
?>

<session id="session">
	<article>
		<div class="container">
			<div class="row linha">
				<?php
				

					include 'partials/_sidebar.php';
					
					include 'partials/_contact-form.php';
				?>
			</div>
		</div>
	</article>

	
</session>





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


<?php
include "partials/_scripts.php";
include "partials/_footer.php"; ?>