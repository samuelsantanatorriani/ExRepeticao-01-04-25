<?php
$n1 = $_POST['n1'];

 echo "<h2>Resultado:</h2>";

$a = $n1;

for ($i=0; $i =$a ; $i++)
{ 
   $c = $n1%2;

   if ($c == 0)
   {
   echo "$i) $n1 <br>";
   }
    $n1--;
}
?>