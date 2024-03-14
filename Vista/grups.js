function eliminarGrup(event){
    let id=event.target.parentElement.parentElement.getAttribute("id");

    window.location.href = "../Controlador/eliminarGrup.php?id="+id;
}
function canviarNom(event){
    event.target.parentElement.children[3].setAttribute("hidden","");
    event.target.parentElement.children[0].setAttribute("hidden","");
    let input= document.createElement("input");
    input.setAttribute("type","text");
    input.setAttribute("value",event.target.parentElement.children[0].firstChild.wholeText);
    event.target.parentElement.insertBefore(input, event.target.parentElement.children[3]);
    input.focus();
    event.target.parentElement.children[5].removeAttribute("hidden");
}

function canviarNom2(event){
    let id=event.target.parentElement.parentElement.getAttribute("id");
    let value=event.target.parentElement.children[3].value;
    window.location.href = "../Controlador/canviarNomGrup.php?id="+id+"&value="+value;
}

$("button[class='btn btn-dark eliminar']").on("click",eliminarGrup);
$("button[class='btn btn-dark canviar']").on("click",canviarNom);
$("button[class='btn btn-dark guardar']").on("click",canviarNom2);
