<?php
//$id = $_GET["id"];

$connction = mysqli_connect("localhost", "root","xx", "name");
$client = mysqli_query($connction, "Select * from clientes");

if ($client){
echo "<?xml version='1.0' encoding='UTF-8'?><clientes>";
    while($row = mysqli_fetch_assoc($client)) {
        echo "<client name='".$row['nombre']."' apellidos='".$row['apellidos']."' edad=".$row['edad']." cargo= '".$row['cargo']."' saldos= ".$row['saldos']."/></client>";
    }
echo "</clientes>";
}

mysqli_close($connction);