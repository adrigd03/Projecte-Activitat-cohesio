
const botoAfegirProva = document.getElementById("afegir_prova");
const formulariProva = document.getElementById("formulari_prova");
const botoEliminarProva = document.getElementById("eliminar_prova");
const formulariEliminar = document.getElementById("formulari_eliminarProva");

const botoModificarProva = document.getElementById("modificar_prova");
const formulariModificar = document.getElementById("formulari_modificarProva");

botoAfegirProva.addEventListener("click", () => {
  if(formulariProva.hidden === true){
     formulariProva.hidden = false;
  } else if (formulariProva.hidden === false){
    formulariProva.hidden = true
  }
});

botoEliminarProva.addEventListener("click", () => {
  if(formulariEliminar.hidden === true){
     formulariEliminar.hidden = false;
  } else if (formulariEliminar.hidden === false){
    formulariEliminar.hidden = true
  }
});


botoModificarProva.addEventListener("click", () => {
  if(formulariModificar.hidden === true){
     formulariModificar.hidden = false;
  } else if (formulariModificar.hidden === false){
    formulariModificar.hidden = true
  }
});







