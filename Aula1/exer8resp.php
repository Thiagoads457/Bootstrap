<?php

    require_once"cabecalho.php";

    require_once"cabecalho.php";

    $area = $_POST['area'];
    $latas = $_POST['latas'];
    
   

    echo"<p>A quantidade de lata(s) de tinta necessária(s) é de: $latas latas e o preço total gasto é de : ".calcularCusto($area)."</p>";


    require_once "rodape.php";