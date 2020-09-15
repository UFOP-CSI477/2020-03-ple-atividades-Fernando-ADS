function validar(campoTempo, campoNome){
  if (campoTempo < 0 || campoNome.length != 0)
  window.alert("Informe um valor válido:");
  campoTempo.focus;
  return false;
}

function sortfunction(a, b) {
  return (a - b)
}

let tempos =  new Array(6);
let posLargada = new Array(6);
let nomes = new Array(6);

tempos = [document.getElementsByName('tempoCompetidor1').value,
document.getElementsByName('tempoCompetidor2').value,
document.getElementsByName('tempoCompetidor3').value,
document.getElementsByName('tempoCompetidor4').value,
document.getElementsByName('tempoCompetidor5').value,
document.getElementsByName('tempoCompetidor6').value];


posLargada = [document.getElementsByName('posicaoLargada1').value,
document.getElementsByName('posicaoLargada2').value,
document.getElementsByName('posicaoLargada3').value,
document.getElementsByName('posicaoLargada4').value,
document.getElementsByName('posicaoLargada5').value,
document.getElementsByName('posicaoLargada6').value];


nomes = [document.getElementsByN('nomeCompetidor1').value,
document.getElementsByN('nomeCompertidor2').value,
document.getElementsByN('nomeCompertidor3').value,
document.getElementsByN('nomeCompertidor4').value,
document.getElementsByN('nomeCompertidor5').value,
document.getElementsByN('nomeCompertidor6').value];

function calculaVencedor(){
  console.log(tempos);

}
