function eliminarGrup(event){
    let id=event.target.parentElement.parentElement.parentElement.getAttribute("id");
    window.location.href = "../Controlador/eliminarGrup.php?id="+id;
}
function canviarNom(event){
    let id=event.target.parentElement.parentElement.parentElement.getAttribute("id");
    event.target.parentElement.firstChild.setAttribute("hidden","");
    let input= document.createElement("input");
    input.setAttribute("type","text");
    input.setAttribute("value",event.target.parentElement.firstChild.firstChild.wholeText);
    event.target.parentElement.appendChild(input)
    input.focus()
    event.target.parentElement.children[3].removeAttribute("hidden")

}

function canviarNom2(event){
    let id=event.target.parentElement.parentElement.parentElement.getAttribute("id");
    let value=event.target.parentElement.lastChild.value;
    window.location.href = "../Controlador/canviarNomGrup.php?id="+id+"&value="+value;
}

$("button[class='eliminar']").on("click",eliminarGrup);
$("button[class='canviar']").on("click",canviarNom);
$("button[class='guardar']").on("click",canviarNom2);