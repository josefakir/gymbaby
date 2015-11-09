<?php 
	include("config.php");
	$idestado = $_GET['i'];
	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
	$sql = "SELECT * FROM municipios WHERE idestado = :idestado ORDER BY municipio";
	$query = $conn->prepare($sql);
	$query->execute(
		array(':idestado' => $idestado)
	);
	$result = $query->fetchAll();
	foreach ($result as $r){
	?>
		<option value="<?php echo $r['idmunicipios'] ?>"><?php echo utf8_encode($r['municipio']) ?></option>
	<?php
	}
?>