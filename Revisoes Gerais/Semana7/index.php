<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: BlueViolet;
            text-align: center;
        }


        .formulario {
            margin: 60px;
            color: white;
            border-radius: 10px;
            padding: 70px;
            border: 6px solid black;
            background-color: gray;
        }

        .formulario label {
            /*foi aqui que conseguimos centralizar
                              os blocos. */
            display: inline-block;
            width: 70px;
            text-align: right;
            margin-right: 10px;
            color: black;
        }

        .formulario .campo {
            margin-bottom: 10px;
            width: 90%;
        }

        .formulario input {
            padding: 10px 10px 60px 10px;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .formulario button {
            padding: 10px 20px;
            background-color: #383b38;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .print {
            height: 100px;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Bem-vindo ao meu site</h1>
    <form action="index.php" method="post" class="formulario" id="meuFormulario">
        <div class="campo">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"> <br>
        </div>
        <div class="campo">
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade"> <br>
        </div>

        <button type="submit" id="enviar">Enviar</button>

    </form>


    <script>
        // Seleciona o formulário pelo ID que criaste no HTML
        const formulario = document.getElementById("meuFormulario");

        // Adiciona o ouvinte para o evento de envio
        formulario.addEventListener("submit", function(e) {

            const nome = document.getElementById("nome").value;
            const idade = document.getElementById("idade").value;

            if (nome === "" || idade === "") {
                e.preventDefault(); // Impede o envio do formulário
                alert("Por favor, preencha todos os campos.");
            }
        });
    </script>

    <?php
    // 1. Verifica se o formulário foi enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // 2. Captura os valores enviados pelos inputs
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        // 3. Exibe a mensagem dinâmica na tela com segurança
        print "<p class='print' style='color: black;'>Olá, " . htmlspecialchars($nome) 
        . "! <br> Voce tem " . htmlspecialchars($idade) . " anos. Dados processados com sucesso!</p>";
    }
    ?>


</body>

</html>