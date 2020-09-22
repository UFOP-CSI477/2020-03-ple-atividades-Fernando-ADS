
function validacao(){
    let n = document.getElementById("um").value;
    if(!isNaN(n) === true || n<9999999999999999){
      window.alert("Informe um valor válido!");
      campo.value = "";
      campo.focus();
      return false;
    }
    return true;
}
