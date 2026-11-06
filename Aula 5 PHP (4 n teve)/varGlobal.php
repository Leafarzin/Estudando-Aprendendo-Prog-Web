<!DOCTYPE html>
<html>
<body>
    <h3>Escopo GLOBAL</h3>
    <?php
    $x = 5; // escopo GLOBAL 
    function minhaFuncao() { // Declaração de função
        // Usar x DENTRO da função gera erro: $x é indefinida
        echo "<p>Variável x dentro da função é: " . $x . "</p>";
    }
    minhaFuncao();
    echo "<p>Variável x fora da função é: " . $x . "</p>";
    ?>
</body>
</html>