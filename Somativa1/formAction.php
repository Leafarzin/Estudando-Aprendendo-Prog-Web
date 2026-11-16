<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Barbearia Navalha</title>

  <!-- link do CSS com caminho relativo (pasta css) -->
  <link rel="stylesheet" href="css/style.css?v=2">


</head>

<body>

  <?php
  // Verifica se os dados foram enviados via POST pelo formulário
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome    = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $email   = isset($_POST["email"]) ? $_POST["email"] : "";
    $celular = isset($_POST["celular"]) ? $_POST["celular"] : "";
    $servico = isset($_POST["servico"]) ? $_POST["servico"] : "";
    $data    = isset($_POST["data"]) ? $_POST["data"] : "";
    $termos  = isset($_POST["termos"]) ? "Sim" : "Não";

    $dataFormatada = "";

    if (!empty($data)) {
      $partesData = explode('-', $data);
      if (count($partesData) === 3) {
        $dataFormatada = $partesData[2] . '/' . $partesData[1] . '/' . $partesData[0];
      }
    }
  } else {
    // Se acessado diretamente sem preencher o formulário
    $nome = $email = $celular = $servico = $dataFormatada = "";
    $termos = "Não";
  }
  ?>

  <!-- mesmo menu das outras páginas, aqui o "ativo" fica em Confirmação -->
  <nav class="menu">
    <a href="index.html">Início</a>
    <a href="form.html">Agendar</a>
    <a class="ativo" href="formAction.php">Confirmação</a>
    <a href="about.html">Sobre</a>
  </nav>

  <main class="conteudo">
    <h1>Agendamento recebido</h1>

    <table id="tabela-confirmacao">
       <tr>
          <th>CAMPO</th>
          <th>VALOR</th>
       </tr>
       <tr>
          <th>Nome</th>
          <td><?php echo $nome; ?></td>
       </tr>
       <tr>
          <th>E-mail</th>
          <td><?php echo $email; ?></td>
       </tr>
       <tr>
          <th>Celular</th>
          <td><?php echo $celular; ?></td>
       </tr>
       <tr>
          <th>Serviço</th>
          <td><?php echo $servico; ?></td>
       </tr>
       <tr>
          <th>Data do agendamento</th>
          <td><?php echo htmlspecialchars($dataFormatada, ENT_QUOTES, 'UTF-8'); ?></td>
       </tr>
       <tr>
          <th>Concorda Form?</th>
          <td><?php echo $termos; ?></td>
       </tr>
    </table>
  </main>

</body>

</html>
