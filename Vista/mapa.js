let gMaps;    // Mapa Google Maps
let gMaps2;    // Mapa Google Maps
let gMark;    // Marcador Institut
let latLng = { lat: 41.67828430583841, lng: 2.7804561010212345 };
let infoWindow;
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
async function crearMapa(divMap, goMaps,geoX,geoY) {
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerView } = await google.maps.importLibrary("marker");
    goMaps = new google.maps.Map(
        divMap,    // Element on dibuixar el mapa
        {
            center: latLng,    // Latitut i longitut del centre del mapa
            zoom: 19,
            mapId: "DEMO_MAP_ID",                            // Ampliació
            mapTypeId: google.maps.MapTypeId.SATELLITE
        });

    marcarSaPa(goMaps);

    // Create the initial InfoWindow.
    infoWindow = new google.maps.InfoWindow({
        content: "Click the map to get Lat/Lng!",
        position: latLng,
    });

    infoWindow.open(goMaps);

    // Configure the click listener.
    goMaps.addListener("click", (mapsMouseEvent) => {
        console.log(mapsMouseEvent.latLng.toJSON())
        document.getElementById(geoX).value=mapsMouseEvent.latLng.toJSON()["lat"];
        document.getElementById(geoY).value=mapsMouseEvent.latLng.toJSON()["lng"];
        // Close the current InfoWindow.
        infoWindow.close();

        // Create a new InfoWindow.
        infoWindow = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
        });
        infoWindow.setContent(
            document.getElementById("nom").value
        );
        infoWindow.open(goMaps);
    });
    function canviarPunt() {
        infoWindow.close();
    
        // Create a new InfoWindow.
        infoWindow = new google.maps.InfoWindow({
            position: {lat:parseFloat(document.getElementById(geoX).value),lng:parseFloat(document.getElementById(geoY).value)},
        });
        infoWindow.setContent(
            document.getElementById("nom").value
        );
        infoWindow.open(goMaps);
    
    }
    
    document.getElementById(geoX).addEventListener("click", canviarPunt);
    document.getElementById(geoY).addEventListener("click", canviarPunt);
}



window.crearMapa = function () {
    document.getElementById("geoX").setAttribute("value", latLng["lat"]);
    document.getElementById("geoY").setAttribute("value", latLng["lng"]);
    gMaps=crearMapa(document.getElementById('mapa'), gMaps,"geoX","geoY");

    document.getElementById("geoX2").setAttribute("value", latLng["lat"]);
    document.getElementById("geoY2").setAttribute("value", latLng["lng"]);
    gMaps2=crearMapa(document.getElementById('mapa2'), gMaps2,"geoX2","geoY2");
};    // Necessari si s'utilitzen mòduls