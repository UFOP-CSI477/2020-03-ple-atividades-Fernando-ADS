let val;
function numbAndOp(valor){
  val = document.getElementById('tela').value += valor;
}

function limpar(){
  document.getElementById('tela').value = '';
}

function calcular(){
  let resposta = eval(val);
  document.getElementById('tela').value = resposta;
}
