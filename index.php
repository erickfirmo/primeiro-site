<?php 
	include 'partials/_head.php'; 
	echo "</head>";  
	echo "<body>";
	include 'partials/_topbar.php';
	include 'partials/_header.php';
	include 'partials/_carouselhome.php';
?>

<div class="container">
	<div class="row linha">

		<div class="col-md-4 box">
			<img class="circle-img" src="img/icon-desenvolvimento.png">
			<h3 class="title">Lorem</h3>
			<p>Donec sollicitudin tincidunt dui vel mollis. Sed ut purus in ante viverra gravida. Vestibulum in aliquam arcu, at pharetra turpis.</p>
			</div>

		<div class="col-md-4 box">	
			<img class="circle-img" src="img/google_adwords_logo.png">
			<h3 class="title">Ipsum</h3>
			<p>Sed pretium condimentum sagittis. Nulla urna magna, lobortis ac quam et, semper faucibus nulla. Vestibulum congue, est sit amet.</p>
			</div>
		
		<div class="col-md-4 box">
			<img class="circle-img" src="img/chaves-logo.png">
			<h3 class="title">Dolor</h3>
			<p>Sed pretium condimentum sagittis. Nulla urna magna, lobortis ac quam et, semper faucibus nulla. Vestibulum congue, est sit amet.</p>
			</div>

	</div>
</div>

<div class="container-fluid">
		<div class="row linha linha-vermelha">


			<div class="col-md-12">
				<h3>Lorem Ipsum Dolor Sit Amet</h3><br>
			</div>
				
						
		
			<div class="col-md-6">
				<p>Curabitur massa leo, pellentesque ac mauris eu, ornare fringilla enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus aliquet, enim id porta ornare, nulla risus euismod massa, ut scelerisque ligula magna ut libero. Donec eu accumsan ex. Morbi vulputate metus quis rhoncus dictum. Sed ante dui, facilisis at ultricies ac, commodo vitae dolor. Praesent molestie hendrerit quam, ac congue lorem convallis et. Cras aliquam nec est vitae rhoncus.</p>
					
				<p>turpis id scelerisque. Quisque rutrum arcu a nunc rhoncus maximus.Ut fermentum malesuada convallis. Vivamus porttitor vitae risus sit amet lacinia. Donec mattis, velit nec venenatis consequat, erat ante semper dolor, facilisis iaculis urna purus nec mi. Duis gravida lobortis eros, ac pharetra orci lobortis vel. Nulla auctor posuere magna.</p>
				
				<p>Consectetur nisl sodales sit amet. Etiam vestibulum imperdiet ligula. Morbi fringilla nunc sapien. Nulla eget nibh eget urna vestibulum tristique et non felis. Praesent egestas augue ipsum, ac rhoncus neque consectetur eget. Maecenas scelerisque lectus non commodo semper. Donec sit amet dapibus elit. Maecenas efficitur, est a feugiat commodo, purus quam eleifend tellus, et finibus mauris ipsum ac felis. Proin at auctor urna, nec pharetra arcu.</p>
				</div>


			<div class="col-md-6">
				<img src="img/maos-notebook.jpg" class="img-fluid maos-note" alt="First">
				</div>
				
		</div>
</div>

<session id="session">
	<article>
		<div class="container">
			<div class="row linha">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<?php
						include "partials/_contact-form.php";
					?>
				</div>
				<div class="col-md-1">	
				</div>
		</div>
</article>














	
</session>

	
<?php
	include "partials/_maps.php";
	include 'partials/_scripts.php';
	include 'partials/_footer.php'; ?>

</body>
</html>

<!-- 
				<nav>
					<ul>
						<li class="service"><a href="">Lorem</a></li>
						<li class="service"><a href="">Ipsum</a></li>
						<li class="service"><a href="">Dolor</a></li>
						<li class="service"><a href="">Sit</a></li>
					</ul>
				</nav> -->