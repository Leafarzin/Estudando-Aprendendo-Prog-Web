<!DOCTYPE html>
<html>
<body>
    <h3>Escopo GLOBAL</h3>
    <?php
    
    function minhaFuncao() { // Declaração de função
        $x = 5; // escopo LOCAL
        echo "<p>Variável x dentro da função é: " . $x . "</p>";
    }
    minhaFuncao();
    // Usar x FORA da função gera erro: $x é indefinida
    echo "<p>Variável x fora da função é: " . $x . "</p>";
    ?>
</body>
</html>