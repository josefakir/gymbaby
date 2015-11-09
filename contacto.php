<?php 
	include("config.php");
?>
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
			<div class="two-third column">
				<h1 class="titulohome">Contacto</h1>
				<form method="post" action="enviar.php">
					<p class="parrafo"><label>Nombre:</label><input type="text" name="nombre"></p>
					<p class="parrafo"><label>Correo:</label><input type="text" name="correo"></p>
					<p class="parrafo"><label>Cómo llegaste a GymBaby At Home:</label><select name="como"></select></p>
					<p class="parrafo"><label>Estado:</label><select id="estado" name="estado">
						<?php 
							$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
							$sql = "SELECT * FROM estados ORDER BY estado";
							$query = $conn->prepare($sql);
							$query->execute();
							$result = $query->fetchAll();
							foreach ($result as $r){
								?>
									<option value="<?php echo $r['idestados'] ?>"><?php echo utf8_encode($r['estado']) ?></option>
								<?php
							}
						?>
					</select></p>
					<p class="parrafo"><label>Delegación / Municipio:</label><select id="municipio" name="municipio"></select></p>
					<p class="parrafo"><label>Edad de tu bebé:</label><select name="edad"></select></p>
					<p class="parrafo"><label>Comentarios:</label><textarea name="comentarios"></textarea></p>
					<p><input type="submit" value="enviar"></p>

					<p class="parrafo">También te puedes comunicar al 55 38 35 15 65 (disponible en whatsapp)</p>
				</form>
			</div>
			<div class="one-third column">
				<div id="widget">
      				<a class="twitter-timeline" href="https://twitter.com/gymbabyathome" data-widget-id="334315539319099392" lang="ES">Tweets by @gymbabyathome</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      			</div>
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