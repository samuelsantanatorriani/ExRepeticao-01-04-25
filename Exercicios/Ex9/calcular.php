<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    

    for ($i=0; $i <= $n1; $i += $n2) 
    { 
        echo "$i <br>";
    }

?>