function validacao(campo){
  let n = campo.length;
  if(n == 0){
    window.alert("Informe um valor válido!");
    campo.value = "";
    campo.focus();
    return false;
  }
  return true;
}

function calculaIMC(){
  let peso = document.getElementById('peso').value;
  let altura = document.getElementById('altura').value;
  let resultado = 0;

  if(altura==0 || peso==0){
    window.alert("Valor inválido!");
    campo.value="";
    return false;
  }

  if(validacao(peso) && validacao(altura) && peso>0 && altura>100){
    altura = altura/100;
    altura = parseFloat(altura);
    peso = parseFloat(peso);
    resultado = (peso /(altura*altura));
    resultado = resultado.toFixed(3);
    document.imcForm.imc.value = resultado;
  }

  if(resultado <= 18.5){
    document.getElementById('classificacao').value = "Subnutricao";
  }
  else if (resultado<24.9 && resultado>18.5) {
    document.getElementById('classificacao').value = "Peso Saudável";
  }

  else if (resultado<29.9 && resultado>25) {
    document.getElementById('classificacao').value = "Sobrepeso";
  }

  else if (resultado<34.9 && resultado>30) {
    document.getElementById('classificacao').value = "Obesidade grau 1";
  }

  else if (resultado<39.9 && resultado>35) {
    document.getElementById('classificacao').value = "Obesidade grau 2";
  }

  else {
    document.getElementById('classificacao').value = "Obesidade grau 3";
  }

  let pesomin=0;
  let pesomax=0;

  pesomin = parseFloat(18.5*altura*altura);
  pesomax = parseFloat(24.9*altura*altura);

  document.getElementById('pesoIdeal').value = (`Entre ${pesomin.toFixed(1)}kg e ${pesomax.toFixed(1)}kg`);

}

function pesoIdeal(){
  let altura = document.getElementById('altura').value;


}
