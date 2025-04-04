<?php
$frase = $_POST['frase'];
$i = 1;

 echo "<h2>Resultado:</h2>";

 for ($i = 1; $i < 6; $i++)
 {
    echo "$i) $frase <br>";
 }
  
?>