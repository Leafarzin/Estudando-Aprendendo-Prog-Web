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

        formulario {
            margin: 20px;
            color: gray;
            border-radius: 5px;

        }

        forumulario label {
            margin-bottom: 5px;
        }

        formulario input {
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 3px;
            border: none;
        }

    </style>

</head>
<body>


    <form action="Revsem6.php" method="post" class="formulario">
 
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">
        <button type="submit">Enviar</button>
    </form>

        
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado

        $nome = $_POST["nome"]; // Obtém o valor do campo "nome"

        print "<p>Ola," . $nome ."!</p>"; // Exibe a mensagem com o nome fornecido

    }
    
       




    ?>

    
</body>
</html>