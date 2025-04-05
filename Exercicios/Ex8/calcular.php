<?php
$n1 = $_POST['n1'];
$i = 0;
echo "<h2>Resultado:</h2>";

for ($i=0; $i < 11; $i++)
{ 
    $total = $n1* $i;
    echo "$n1 x $i = $total <br>";
}

?>