<!--    Colocar este arquivo no servidor web.
        Ou iniciar o servidor local no terminal: php -S localhost:8080
-->
<!DOCTYPE html>
<html>

<head>
    <title>Teste PHP</title>
</head>

<body>
    <?php 
        echo "<p>Olá Mundo Cruel! Primeiro Código em PHP</p>"; 

        // Variáveis
        $string = "Claudio Conti Ribeiro";
        $integer = 1_000_000;
        $float = 1_000.55;
        $bool = false; // Se quiser imprimir false ele não imprime nada.
        $array = [$name, $integer, $float]; // Não consegue ser imprimido com echo.

        // Constantes, variáveis imutaveis.
        define('pi', 3.14159265359);

        // Comando echo pega seus paramêtros e os transforma em string para o html,
        echo 
        "<p>Variáveis = 
            string: $string;
            inteiro:  $integer;
            float: $float;
            booleano: $bool;
            array: $array;
            pi: " . pi . 
        ";</p>";

        // Comparação
        $integer = 20;
        $string = "20";

        echo
        "<p> 
            integer = $integer,
            string = \"$string\".
        </p>";
        
        echo "<p>integer == string -> " . ($integer == $string) . "(true)</p>"; // Compara apenas valor.
        echo "<p>integer === string -> " . ($integer === $string) . "0(false)</p>"; // Compara  valor e tipo.
        echo "<p>integer != string -> " . ($integer != $string) . "0(false)</p>"; // Compara  valor e tipo.
        echo "<p>integer !== string -> " . ($integer !== $string) . "(true)</p>";// Compara  valor e tipo.        
    
        // Vai retornar true se não for zero ou false.
        echo "<p>true && true -> ". (true && true) . "(true)</p>";
        // Compara se as variáveis são true ou falso, bom olhar a tabela verdade
        echo "<p>true && false -> ". (true && false) . "0(false)</p>";

        echo "<p>true || true -> ". (true || true) . "(true)</p>";
        echo "<p>true || false -> ". (true || false) . "(true)</p>";
        echo "<p>false || false -> ". (false || false) . "0(false)</p>";
    ?>

    <?php if ($bool == true): ?>
        <p>Isso irá aparecer se a expressão for verdadeira.</p>
    <?php else: ?>
        <p>Senão isso irá aparecer.</p>
    <?php endif; ?>

    <?php // phpinfo(); ?>
</body>

</html>