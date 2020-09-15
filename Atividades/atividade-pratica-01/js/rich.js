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



function calculaEscala(){
  let amplitude = document.getElementById('amplitude').value;
  let tempo = document.getElementById('tempo').value;
  let resultado = 0;

  if(validacao(amplitude) && validacao(tempo) && amplitude>0){
    let logA = parseFloat(Math.log10(amplitude));
    let logT = parseFloat(Math.log10(8*tempo));

    resultado = parseFloat(logA + (3*logT) - 2.92);
    resultado = resultado.toFixed(3);
    document.richForm.magnitude.value = resultado;
  }


  if(resultado <= 3.5){
    document.getElementById('efeitos').value = "Geralmente não sentido, mas gravado";
  }
  else if (resultado<5.4 && resultado>3.5) {
    document.getElementById('efeitos').value = "Às vezes sentido, mas raramente causa dano";
  }

  else if (resultado<6.0 && resultado>5.5) {
    document.getElementById('efeitos').value = "Pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas";
  }

  else if (resultado<6.9 && resultado>6.1) {
    document.getElementById('efeitos').value = "Destrutivo em áreas em torno de 100km do epicentro";
  }

  else if (resultado<7.9 && resultado>7.0) {
    document.getElementById('efeitos').value = "Grande terremoto, sérios danos em uma grande faixa";
  }

  else {
    document.getElementById('efeitos').value = "Enorme terremoto, graves danos em áreas a centenas de quilômetros";
  }


}
