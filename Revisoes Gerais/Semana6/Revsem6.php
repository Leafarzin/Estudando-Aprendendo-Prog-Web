<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: BlueViolet;
            text-align: center;
        }

        p {
            font-family: Arial, sans-serif;
            color: white;
            font-size: 16px;
        }

        .formulario {
            margin: 60px;
            color: white;
            border-radius: 5px;
            padding: 90px;
            border: 10px solid black;
            background-color: gray;
        }

        .formulario label {
            margin-bottom: 10px;
        }

        .formulario input {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 3px;
        }

        print {
            height: 100px;
            color: white;
        }
    </style>

</head>

<body>


    <form action="Revsem6.php" method="post" class="formulario" id="meuFormulario">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"> <br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade"> <br>
        <button type="submit" id="enviar">Enviar</button>
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado

        $nome = $_POST["nome"]; // Obtém o valor do campo "nome"
        $idade = $_POST["idade"]; // Obtém o valor do campo "idade"

        print "<p class='print'>Ola," . $nome . "!</p>"; // Exibe a mensagem com o nome fornecido
        print "<p class='print'>Sua idade é: " . $idade . "</p>"; // Exibe a mensagem com a idade fornecida
        
    }

    ?>

    <script>
        const formulario = document.getElementById("meuFormulario");

        formulario.addEventListener("submit", function(e) {
            // Pega os valores digitados nos inputs usando os IDs
            const nomeValor = document.getElementById("nome").value;
            const idadeValor = document.getElementById("idade").value;

            // Verifica se o nome OU a idade estão vazios (o operador || significa "OU")
            if (nomeValor === "" || idadeValor === "") {
                // Impede o envio do formulário para o servidor
                e.preventDefault();

                // Exibe o alerta para o utilizador
                alert("Por favor, preencha todos os campos antes de enviar!");
            }
        });
    </script>


</body>

</html>