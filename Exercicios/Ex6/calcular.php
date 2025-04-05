<?php
$n1 = $_POST['n1'];
$i = 0;

echo "<h2>Resultado:</h2>";

for ($i=0; $i < $n1+1; $i++) 
{
    $p = $i % 2;

    if ($p = 0) {
        echo "$i<br>";
    }
    elseif($p != 0) {
        echo "$i";
    }
}
?>