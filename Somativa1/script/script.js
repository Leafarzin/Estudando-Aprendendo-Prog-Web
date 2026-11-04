// Espera o HTML carregar por completo
document.addEventListener("DOMContentLoaded", function () {

  // Guarda em variáveis os elementos que vamos usar
  const janela = document.getElementById("janela");
  const textoJanela = document.getElementById("texto-janela");

  // Pega TODOS os botões que têm a classe "botao-info"
  const botoes = document.querySelectorAll(".botao-info");

  // Para cada botão, cria um "ouvinte" de clique
  botoes.forEach(function (botao) {
    botao.addEventListener("click", function () {
      textoJanela.textContent = botao.dataset.detalhe; // lê o data-detalhe do botão clicado
      janela.style.display = "block";                  // mostra o pop-up
    });
  });

  // Botão X: esconde o pop-up
  document.getElementById("fechar").addEventListener("click", function () {
    janela.style.display = "none";
  });

});


const itens = document.querySelectorAll("#jogadores li");

itens.forEach(function (item) {
  item.addEventListener("click", function () {
    item.classList.toggle("destaque");   // liga/desliga a classe a cada clique
  });
});