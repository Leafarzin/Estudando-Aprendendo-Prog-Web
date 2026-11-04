// lógica do formAction.html
document.addEventListener("DOMContentLoaded", function () {

  // leio o que veio depois do "?" na URL (os dados do GET)
  const params = new URLSearchParams(window.location.search);

  // nomes dos campos do formulário (o "name" de cada input)
  const campos = ["nome", "email", "celular", "servico", "data"];

  // para cada campo: pego o valor pelo nome e escrevo no span "r-nome", "r-email"...
  campos.forEach(function (campo) {
    document.getElementById("r-" + campo).textContent = params.get(campo);
  });

});