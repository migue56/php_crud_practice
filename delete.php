<?php

$connction = mysqli_connect("localhost", "root","xxx", "name");

$id = $_POST["id"];


mysqli_query($connction, "DELETE FROM clientes WHERE id=".$id);

echo "<p>deleted</p>";

mysqli_commit($connction);

/* Cerrar la conexión */
mysqli_close($connction);