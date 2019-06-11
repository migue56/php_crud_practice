<?php

$connction = mysqli_connect("localhost", "root","xxx", "name");

echo var_dump($_POST);
$id = $_POST["id"] or null;
$name = $_POST["name"] ;
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$cargo = $_POST["cargo"];
$saldos = $_POST["saldos"];

if ($id){
    $sql = "UPDATE clientes SET nombre='".$name."', apellidos='".$apellidos."', edad=".$edad.", cargo='".$cargo."', saldos=".$saldos." WHERE id=".$id; 
}else{
    $sql = "INSERT INTO clientes (nombre, apellidos, edad, cargo, saldos) VALUES ('".$name."', '".$apellidos."', ".$edad.",'".$cargo."',".$saldos.")";
}

echo "<br/><code>".$sql."</code>";
mysqli_query($connction,$sql) or die(mysqli_errno($connction));

mysqli_commit($connction);
/* Cerrar la conexión */
mysqli_close($connction);