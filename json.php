<?php
$id = $_GET["id"];

$connction = mysqli_connect("localhost", "root","xxx", "name");
$client = mysqli_query($connction, "Select * from clientes where id=".$id);

if ($client){
    while($row = mysqli_fetch_assoc($client)) {
        echo "{'name':'".$row['name']."', 'apellidos': '".$row['apellidos']."', 'edad': ".$row['edad'].", 'cargo': '".$row['cargo']."', 'saldos': ".$row['saldos']."}";
    }
}

mysqli_close($connction);