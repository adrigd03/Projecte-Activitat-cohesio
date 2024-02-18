const botoAfegirProva = document.getElementById("afegir_prova");
const formulariProva = document.getElementById("formulari_prova");
const imgMapa = document.getElementById("mapa");
const divMapa = document.getElementById("divMapa");
const marker = document.getElementById("marker");

//const campsObligatoris = ["nom","descripcio", "lloc","professor","material"];
  


botoAfegirProva.addEventListener("click", () => {
  if(formulariProva.hidden === true){
     formulariProva.hidden = false;
  } else if (formulariProva.hidden === false){
    formulariProva.hidden = true
  }
});



// put marker on img mapa on click
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






});




