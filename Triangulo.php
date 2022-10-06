<?php
$valor1 = $_POST[L1];
$valor2 = $_POST[L2];
$valor3 = $_POST[L3];

if ($valor1 == $valor2 && $valor2 == $valor3) {
    
    echo "a classificação do triangulo é equilátero";
}

elseif ($valor1 == $valor2 && $valor2 != $valor3) {
    
    echo "a classificação do triangulo é isósceles";
}

else {

    echo "a classificação do triangulo é escaleno";

}

   
?>