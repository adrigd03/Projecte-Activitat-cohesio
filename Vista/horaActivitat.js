let tabla=document.getElementById("tabla");

let actHora={};

function tableToJson(table) { 
    var data = [];
    for (var i = 0; i < table.rows.length; i++) { 
        var tableRow = table.rows[i]; 
        var rowData = []; 
        for (var j = 0; j < tableRow.cells.length; j++) { 
            rowData.push(tableRow.cells[j].innerHTML);
        } 
        data.push(rowData); 
    } 
    return data; 
}
let tableJSON=tableToJson(tabla);
console.log(tableJSON);

let activitat=document.getElementById("activitat");
let hora=document.getElementById("hora");

let grup1=document.getElementById("grup1");
let grup2=document.getElementById("grup2");

for (let index = 1; index < tableJSON[0].length; index++) {
    //Para añadir las pruebas al select
    let element = tableJSON[0][index];
    let option = document.createElement("option");
    let textNode=document.createTextNode(element);
    option.appendChild(textNode);
    activitat.appendChild(option);

    //Para añadir las horas al select
    element = tableJSON[index][0];
    option = document.createElement("option");
    textNode=document.createTextNode(element);
    option.appendChild(textNode);
    hora.appendChild(option);
}
for (let index = 0; index < tableJSON.length; index++) {
    const element = tableJSON[0][index];
    if(element==activitat.firstChild.firstChild.wholeText){
        for (let j = 0; j < tableJSON[index].length; j++) {
            const element2 = tableJSON[index][j];
            if(element2==hora.firstChild.firstChild.wholeText){
                grup1.innerHTML=tableJSON[index][j+1];
                let radio=document.createElement("input");
                radio.setAttribute("type","radio");
                radio.setAttribute("name","vic");
                grup1.appendChild(radio);
                grup2.innerHTML=tableJSON[index][j+2];
                radio=document.createElement("input");
                radio.setAttribute("type","radio");
                radio.setAttribute("name","vic");
                grup2.appendChild(radio);
            } 
        }
    }
}

function canviarGrups(){
    let activitatSel="";
    let horaSel="";
    for (let index = 0; index < activitat.children.length; index++) {
        const element = activitat.children[index];
        if(element.selected){
            activitatSel=element.firstChild.wholeText
        }    
    }
    for (let index = 0; index < hora.children.length; index++) {
        const element = hora.children[index];
        if(element.selected){
            horaSel=element.firstChild.wholeText
        }    
    }

    for (let index = 1; index < tableJSON.length; index++) {
        const element = tableJSON[0][index];
        if(element==activitatSel){
            for (let j = 0; j < tableJSON.length; j++) {
                const element2 = tableJSON[j][0];
                if(element2==horaSel){
                    grup1.innerHTML=tableJSON[j][index*2-1];
                    let radio=document.createElement("input");
                    radio.setAttribute("type","radio");
                    radio.setAttribute("name","vic");
                    grup1.appendChild(radio);

                    grup2.innerHTML=tableJSON[j][index*2];
                    radio=document.createElement("input");
                    radio.setAttribute("type","radio");
                    radio.setAttribute("name","vic");
                    grup2.appendChild(radio);
                } 
            }
        }
    }
}

function enviar(event) {
    event.preventDefault();
    if(grup1.children[0].checked){
        let grup=grup1.firstChild.wholeText
        window.location.href="../Controlador/afegirVictoria.php?grup="+grup;
    }else if(grup2.children[0].checked){
        let grup=grup2.firstChild.wholeText
        window.location.href="../Controlador/afegirVictoria.php?grup="+grup;
    }
    
}


document.getElementById("hora").addEventListener("change",canviarGrups);
document.getElementById("activitat").addEventListener("change",canviarGrups);
document.getElementById("enviar").addEventListener("click",enviar);

