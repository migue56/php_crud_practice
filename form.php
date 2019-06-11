<?php

$id = $_GET["id"];

$connction = mysqli_connect("localhost", "root","xxx", "name");
$client = mysqli_query($connction, "Select * from clientes where id=".$id);
//echo var_dump($client);
if ($client){
    while($row = mysqli_fetch_assoc($client)) {
?>
    <h1> Edit </h1>
    <form action="edit.php" method="post">
      <?php 
      echo "<input name='id' value='".$row['id']."' type='hidden'/>";
      echo "<br>Nombre <input name='name' value='".$row['nombre']."'/>";
      echo "<br>Apellidos <input name='apellidos' value='".$row['apellidos']."'/>";
      echo "<br>Edad <input name='edad' value='".$row['edad']."'/>";
      echo "<br>cargo <input name='cargo' value='".$row['cargo']."'/>";
      echo "<br>Saldos <input name='saldos' value='".$row['saldos']."'/>";
        ?>
       <br>
      <input type="submit" value="Submit">
      <a href="delete.php"> delete</a>
    </form>
<?php
    }
}else{
?>
    <h1> Create </h1>
    <form action="edit.php" method="post">
      <br>Nombre 
      <input name="name"/>
      <br>Apellidos
      <input name="apellidos">
      <br>Edad
      <input name="edad">
      <br>Cargo
      <input name="cargo">
      <br>Saldos
      <input name="saldos" >
      <input type="submit" value="Submit">
    </form>
<?php }

mysqli_close($connction);
?>