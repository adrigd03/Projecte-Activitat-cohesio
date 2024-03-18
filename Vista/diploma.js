let grup = JSON.parse(localStorage.getItem("grup"));

document.getElementById("posicio").innerHTML=grup["posicio"]+" CLASIFICAT";

document.getElementById("imatge").src=grup["ruta"];

document.getElementById("nom").innerHTML=grup["nom"];