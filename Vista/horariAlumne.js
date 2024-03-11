let gMaps;    // Mapa Google Maps
let gMark;    // Marcador Institut

// Crear marcador de Google Maps
function crearMarcador(latitut, longitut, text) {
    return new google.maps.marker.AdvancedMarkerElement(
        {
            position: { lat: latitut, lng: longitut },    // Latitut i longitut
            title: text                                 // Text del "tooltip"
        });
}

// Posar el marcador de l'institut en el mapa
function marcarSaPa(goMaps) {
    // Esborrar marcador (si ja estava posat)
    if (gMark != null) gMark.setMap(null);
    // Crear marcador
    gMark = crearMarcador(41.6783, 2.78065, "Institut Sa Palomera\nAula 2, Cicle DAW2");
    // Situar-lo en el mapa
    gMark.setMap(goMaps);
}
//https://rapidapi.com/jgentes/api/crime-data
// Crear mapa Google Maps
async function crearMapa(divMap, goMaps) {
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerView } = await google.maps.importLibrary("marker");
    goMaps = new google.maps.Map(
        divMap,    // Element on dibuixar el mapa
        {
            center: { lat: 41.67828430583841, lng: 2.7804561010212345 },    // Latitut i longitut del centre del mapa
            zoom: 19,
            mapId: "DEMO_MAP_ID",                            // Ampliació
        });

    marcarSaPa(goMaps);

   
}




window.crearMapa = function () {
    crearMapa(document.getElementById('mapa'), gMaps);
};    // Necessari si s'utilitzen mòduls