// lógica do form.html
document.addEventListener("DOMContentLoaded", function () {

  // ===== data: não deixa escolher dia que já passou =====
  const campoData = document.getElementById("data");
  const hoje = new Date().toISOString().split("T")[0];   // data de hoje no formato AAAA-MM-DD
  campoData.min = hoje;                                  

  // ===== máscara do celular: (xx) xxxxx-xxxx =====
  const celular = document.getElementById("celular");

  // o evento "input" dispara toda vez que o campo muda
  celular.addEventListener("input", function () {
    // tiro tudo que não é número e limito a 11 dígitos
    let n = celular.value.replace(/\D/g, "").slice(0, 11);

    // vou montando o formato conforme a quantidade de dígitos
    if (n.length > 6) {
      n = "(" + n.slice(0, 2) + ") " + n.slice(2, 7) + "-" + n.slice(7);
    } else if (n.length > 2) {
      n = "(" + n.slice(0, 2) + ") " + n.slice(2);
    } else if (n.length > 0) {
      n = "(" + n;
    }

    celular.value = n;   // devolvo o valor formatado para o campo
  });

});