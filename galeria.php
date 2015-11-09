<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("head.php"); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="twelve column">
				<?php include("header.php"); ?>
			</div>
		</div>
	</header>
	<div id="content" class="w100">
		<div class="container">
			<!--<div id="carrusel" class="twelve column">
				<div id="owl-example" class="owl-carousel">
					<img src="images/slider/1.jpg" alt="1">
					<img src="images/slider/2.jpg" alt="2">
					<img src="images/slider/3.jpg" alt="3">
					<img src="images/slider/4.jpg" alt="4">
				</div>
			</div>-->
			<div class="clear"></div>
			
			<div id="layout">
				<?php 
					$directorio = 'images/fotos/';
					$ficheros1  = scandir($directorio);
					foreach($ficheros1 as $f){
						if($f!="." and $f!=".."){
							?>
								<img src="images/fotos/<?php echo $f ?>">
							<?php
						}
					}
				?>
			</div>

			<div class="clear"></div>
		</div>
	</div>
	<footer>
		<div class="container">
			<?php include("footer.php") ?>
		</div>
	</footer>
</body>
</html>