<!DOCTYPE html>
<html>
<body>
    <h3>Escopo GLOBAL + palavra-chave GLOBAL</h3>
    <?php
    $x = 10; $y=20; // escopo global 
    function minhaFuncao() { // Declaração de função
        global $x, $y; // Uso correto de variável global dentro de função 
        echo "<p>Soma dentro de função: x + y (globais) = " . ($x + $y) . "</p>";
    }
    minhaFuncao();
    echo "<p>Variável x = " . $x . "</p>";
    echo "<p>Variável y = " . $y . "</p>";
    ?>
</body>
</html>
