
const botoAfegirProva = document.getElementById("afegir_prova");
const formulariProva = document.getElementById("formulari_prova");
/*
botoAfegirProva.addEventListener("click", () => {
    formulariProva.hidden = false;
})


formulariProva.addEventListener("click", (e) => {
    if (e.target === formulariProva) {
      formulariProva.hidden = true;
    }
  });
 */
  


botoAfegirProva.addEventListener("click", () => {
     formulariProva.hidden = false;
  // formulariProva.classList.toggle("visible");

})


formulariProva.addEventListener("click", (e) => {
  if(!formulariProva.classList.contains("visible")){
    formulariProva.style.display = "none";
  } 
    /*
    if (e.target === formulariProva) {
      formulariProva.hidden = true;
    }  */
  }); 

