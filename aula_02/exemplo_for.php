<?php
    for ($i = 1; $i <= 5; $i++) {
        echo  $i;
        echo "<br>";
    }
    echo "<hr>";

    $nomes = ['FULANO', 'CICLANO', 'BELTRANO','ANDERSON','MARIA'];
    //echo $nomes;

    foreach ($nomes as $indice => $valor) {
        echo $valor . "<br>";
    }
      echo "<hr>";



    $qtd = count($nomes);

    for ($i = 0; $i < $qtd; $i++) {
        echo $nomes[$i];
        echo "<br>";
    }
    echo "<hr>";
     

?>