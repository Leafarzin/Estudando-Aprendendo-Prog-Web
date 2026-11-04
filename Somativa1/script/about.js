// lógica do about.html
document.addEventListener("DOMContentLoaded", function () {

  // pego os itens da lista de tecnologias
  const itens = document.querySelectorAll("#lista-tec li");

  // ao clicar em um item, liga/desliga a classe "destaque"
  itens.forEach(function (item) {
    item.addEventListener("click", function () {
      item.classList.toggle("destaque");
    });
  });

});