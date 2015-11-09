<?php 
include("config.php");
$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$enteraste = $_POST['enteraste'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$edad = $_POST['edad'];
$comentario = $_POST['comentarios'];
//estado
$sql = "SELECT * FROM estados WHERE idestados = ?";
$q = $conn->prepare($sql);
$q->execute(array($estado));
$q->setFetchMode(PDO::FETCH_BOTH);
while($r = $q->fetch()){
  $estado = utf8_encode($r['estado']);
}
//municipioç
$sql = "SELECT * FROM municipios WHERE idmunicipios = ?";
$q = $conn->prepare($sql);
$q->execute(array($municipio));
$q->setFetchMode(PDO::FETCH_BOTH);
while($r = $q->fetch()){
  $municipio = utf8_encode($r['municipio']);
}
$cuerpo = "Formulario recibido\n"; 
$cuerpo .= "Nombre: " .$nombre. "\n"; 
$cuerpo .= "Correo: " .$correo. "\n"; 
$cuerpo .= "Como te enteraste: " .$enteraste. "\n"; 
$cuerpo .= "Estado: " .$estado. "\n"; 
$cuerpo .= "Municipio: " .$municipio. "\n"; 
$cuerpo .= "Edad del bebé: " .$edad. "\n"; 
$cuerpo .= "Comentario: " .$comentario. "\n"; 
$destino = "contacto@gymbabyathome.com";
//mail("contacto@gymbabyathome.com","Formulario recibido",$cuerpo);
if(mail($destino,"Formulario recibido",$cuerpo)){
	echo "Tus comentarios fueron enviados correctamente";
}
?>