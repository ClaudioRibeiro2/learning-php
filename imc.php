<div>
    <?php

    $altura = 1.80;
    $peso = 84.4;

    $imc = $peso / ($altura * $altura);

    $tipoImc;
    if ($imc < 18.5){
        $tipoImc = "Você esta magro."; 
    } elseif($imc >= 18.5 && $imc < 24.9){
        $tipoImc = "Você está no peso ideal.";
    } elseif($imc >= 24.9 && $imc < 30){
        $tipoImc = "Você está com sobrepreso.";
    } else {
        $tipoImc = "Você está com obesidade."; 
    }

    echo "<p>O IMC de $altura metros e $peso quilos é $imc</p>";
    echo "<p>$tipoImc</p>";
    ?>
</div>