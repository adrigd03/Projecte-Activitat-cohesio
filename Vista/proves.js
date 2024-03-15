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







// put marker on img mapa on click
/*
imgMapa.addEventListener("click", (e) => {
  if (e.target !== e.currentTarget) {
    return;
  }

  // Si el clic es entre el borde 
  console.log(e);
  // Agafar marker width 
  var markerWidth = marker.clientWidth / 2;
  var x = e.offsetX - markerWidth;
  var y = e.offsetY;
  
  console.log(x,y);
  marker.style.left = x + "px";
  marker.style.top = y + "px";
  marker.style.display = "block";

  // Guardar coordenades de manera que es puguin usar en mapes de diferents mides
  var img = document.getElementById("mapa");
  var imgWidth = img.clientWidth;
  var imgHeight = img.clientHeight;
  var xRel = (x + markerWidth) / imgWidth;
  var yRel = y / imgHeight;
  console.log(xRel,yRel);
  
  input = document.getElementById("xy");
  input.value = xRel + "," + yRel;

}); */


let eliminar = document.getElementsByClassName("eliminar")[0];

eliminar.addEventListener("click",() => {
  let id = eliminar.id;
  console.log(id);
  if(confirm("Estas segur de que vols eliminar aquesta prova?")){
    $.ajax({
      url: '../Controlador/proves.php',
      type: 'POST',
      data: {id: id},
      success: function(response) {
        console.log(response);
        if(response.trim().toLowerCase() == 'success'){
          eliminar.parentElement.parentElement.parentElement.remove();
          
        } 
      }

    });
  }
});



/*
function eliminarProva(id) {
    console.log(`id: ${id}`)
    if(confirm("Estas segur de que vols eliminar aquesta prova?")){
      $.ajax({
        url: '../Controlador/eliminarProva.php',
        type: 'POST',
        data: {id: id},
        succes: function(response) {
          if(response == 'succes'){
          alert('Prova Eliminada');
          location.reload();
          } else {
            alert('Error al eliminar la prova');
          }
        }
      });
    } 
} */

