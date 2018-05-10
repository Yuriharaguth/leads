function apenasNumeros() {
  var elements = document.getElementById('telefone_1').value;

  var filtrado = elements.replace(/\D+/g, '');

  document.getElementById('telefone_1').value = filtrado;
}
