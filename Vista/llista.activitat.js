//Durant l'activitat:
function tractarDades(){
    let trArray = document.getElementsByTagName("tr");
    let LlistatAlumnes=[];
    for (let index = 0; index < trArray.length; index++) {
        const tr = trArray[index];
        let checkbox=tr.children[1].children[0];
        if(checkbox){
            let alumneArray=[tr.getAttribute("id")];
            if(checkbox.checked){
                alumneArray.push(1);
            }
            else{
                alumneArray.push(0);
            }
            LlistatAlumnes.push(alumneArray);
        }    
    }
    window.location.href = "../Controlador/passarLlistaActivitat.php?alumnes="+LlistatAlumnes;

}

document.getElementById("enviar").addEventListener("click",tractarDades);