function limpaSelect(campo){
   while (campo.length > 1 ) {
      campo.remove(1);
   }
}


function preencherSelectBreaking(data){
    let breaking = document.getElementById("breaking");
    limpaSelect(breaking);
    let index;
    for(let index in data){
        const {char_id , name, nickname, status, appearance} = data[index];
        let option = document.createElement("option");
        option.value = char_id;
        option.innerHTML = `${char_id} - ${name}`;
        breaking.appendChild(option);

    }
}


function carregaBreaking(){
    fetch("https://breakingbadapi.com/api/characters")
      .then(response => response.json())
      .then(data => preencherSelectBreaking(data))
      .catch(error => console.error(error))
}


function carregaInfos(){
    const breaking = document.getElementById("breaking");
    const breaking_index = breaking.selectedIndex;
    const breaking_id = breaking.options[breaking_index].value;
    const infos = document.getElementById("infos");
    limpaSelect(infos);

    if(breaking_id == ""){
      return;
    }

    fetch("https://breakingbadapi.com/api/characters")
      .then(response => response.json())
      .then(data => preencherSelectInfos(data))
      .catch(error => console.error(error))
}

function preencherSelectInfos(data){
    let infos = document.getElementById("infos");
    limpaSelect(infos);
    for(let index in data){
      const {char_id , name, nickname, status, appearance} = data[index];
      let option = document.createElement("option");
      option.value = char_id;
        option.innerHTML = `${nickname} - Temporadas: ${appearance}`;

      infos.appendChild(option);
    }
}

/*
function ativaSpinner(){


}
*/
