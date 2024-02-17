
const botoAfegirProva = document.getElementById("afegir_prova");
const formulariProva = document.getElementById("formulari_prova");
//const campsObligatoris = ["nom","descripcio", "lloc","professor","material"];
  


botoAfegirProva.addEventListener("click", () => {
  if(formulariProva.hidden === true){
     formulariProva.hidden = false;
  } else if (formulariProva.hidden === false){
    formulariProva.hidden = true
  }
});



