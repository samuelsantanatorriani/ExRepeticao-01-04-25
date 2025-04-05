<?php

$numero = isset($_POST['n1']) ? intval($_POST['n1']) : 0;

echo "<h2>Resultado:</h2>";

if ($numero >= 0)
{
    for ($i = $numero; $i >= 0; $i--) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
        
    }
} 

?>