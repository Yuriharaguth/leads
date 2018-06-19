function apenasNumeros() {
  var elements = document.getElementById('telefone_1').value;

  var filtrado = elements.replace(/\D+/g, '');

  document.getElementById('telefone_1').value = filtrado;
}

function validaNome(campo) {
  var elements = document.getElementById('nome_doador').value;
  var filtrado = elements.replace(/[\d.*\-&%$\+#@!"'?<>+;:|=.]/, '');
  filtrado = filtrado.replace(/( ){2,}/, '');
  document.getElementById('nome_doador').value = filtrado;
}
