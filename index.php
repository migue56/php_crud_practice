<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<?php
echo "<h1>PUNTO:1-3</h1>";
$connction = mysqli_connect("localhost", "root","xxx", "name");

$list = mysqli_query($connction, "Select * from clientes");

echo "<a href='form.php'>create</a>";
if ($list){
    echo "<table>";
    while($client = mysqli_fetch_assoc($list)) {
        
        echo "<tr><td>";
        echo "<p>".$client['nombre']."</p>";
        echo "</td>";
        echo "<td><a href='form.php?id=".$client['id']."'>edit</a></td>";
        echo "<td><a href='xml.php?id=".$client['id']."'>xml</a></td>";
        echo "<td><a href='json.php?id=".$client['id']."'>json</a></td></tr>";
    }
echo "</table>";
}

mysqli_close($connction);


echo "<h1>PUNTO:4</h1>";

$list = "Papas, MANGOS, NARANJAS,FRESAS";
$newList = $str_arr = explode (",", $list);
$removed = array_pop($newList);

echo "remove:".var_dump($removed);
echo "<br/>";
echo var_dump($newList);

echo "<h1>PUNTO:5</h1>";
?>
<button id="a"> red</button>
<button id="b"> green</button>
<script>
$("#a").click(function(){
  $("#a").css("background","red");
  $("#b").css("background","red");
});
$("#b").click(function(){
	  $("#a").css("background","green");
	  $("#b").css("background","green");
	
});
</script>
