<?php
    $campo1=$_POST['campo1'];
    $campo2=$_POST['campo2'];

    $altura=$campo2 * $campo2;
    $resultado=$campo1/$altura;

    if ($resultado < 18.5) {
        echo"Seu IMC é de $resultado, você está abaixo do peso";
    }
    if ($resultado > 18.6  && $resultado < 24.9) {
        echo "Seu IMC é de $resultado, você está no peso ideal";
         
    }
    if ($resultado > 25.0  && $resultado < 29.9) {
        echo "Seu IMC é de $resultado, você está levemente acima do peso";
         
    }
    if ($resultado > 30.0  && $resultado < 34.9) {
        echo "Seu IMC é de $resultado, você está com obesidade grau 1";
         
    }
    if ($resultado > 35.0  && $resultado < 39.9) {
        echo "Seu IMC é de $resultado, você está com obesidade grau 2";
         
    }
    if ($resultado > 40.0){
        echo "Seu IMC é de $resultado, você está com obesidade grau 3";
    }    
?>
