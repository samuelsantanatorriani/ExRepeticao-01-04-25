<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$i = 0;

echo "<h2>Resultado:</h2>";

for ($i=0; $i < $n1+1; $i++)
{ 
    echo "$i <br>";

    if ($n2 > 1)  {
        $i = $i + $n2 - 1;
    }
}

?>