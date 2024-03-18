function setPrint() {
    const closePrint = () => {
        document.body.removeChild(this);
    };
    this.contentWindow.onbeforeunload = closePrint;
    this.contentWindow.onafterprint = closePrint;
    this.contentWindow.print();
}
function imprimir(e) {
    
    let grup = {
        id: e.target.parentElement.parentElement.getAttribute("id"),
        posicio: e.target.parentElement.children[0].firstChild.wholeText,
        nom: e.target.parentElement.children[1].firstChild.wholeText
    }
    localStorage.setItem("testJSON", JSON.stringify(grup));
    const hideFrame = document.createElement("iframe");
    hideFrame.onload = setPrint;
    hideFrame.style.display = "none"; // hide iframe
    hideFrame.src = "../Vista/diploma.vista.php";
    document.body.appendChild(hideFrame);

}
$("button[class='diploma btn btn-dark']").on("click", imprimir);