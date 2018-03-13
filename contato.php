<?php 
	include 'partials/_head.php';
	echo "</head>";   
	echo "<body>";
	include 'partials/_topbar.php';
	include 'partials/_header.php'; 
?>

<div id="contato" class="container-fluid">
	<h3>CONTATO</h3>

</div>

<session id="session">
	<article>
		<div class="container">
			<div class="row linha">
				<div class="left-content col-md-8">

			<?php
				include 'partials/_contact-form.php';

				echo '</div>';

				include 'partials/_sidebar.php';

				echo '</div>';
			?>

				</div>
			</div>
		</div>

	</article>

	
	<?php
		include "partials/_maps.php";
	?>


</session>

<?php
include "partials/_scripts.php";
include "partials/_footer.php"; ?>