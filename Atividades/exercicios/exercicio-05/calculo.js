function validar(campo){
    let n = campo.value;
    if(n.length == 0  || n < 1900 || n>2020 || isNaN(parseInt(n))){
      window.alert("Informe um valor válido!");
      campo.value = "";
      campo.focus();
      return false;
    }
    return true;
}

function calcular(){
    let ano = document.dados.ano;
    if(validar(ano)){
      let idade = parseInt(2020)  - parseInt(ano.value);
      document.dados.idade.value = idade;
    }
}

function validarTexto(){
    let n = document.getElementById("labelNome", "labelRG", "labelCPF","labelEmail","labelTel","labelEndereco").value;
    if(n == ""){
      window.alert("Informe um valor válido!");
      n.value = "";
      n.focus();
      return false;
    }
    return true;
}
