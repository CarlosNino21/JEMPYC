console.log("Cargando mapa con plan de emergencia...");

// Coordenadas base (Santa Catarina)
const latDestino = 25.6749;
const lngDestino = -100.4624;

// 1. Inicializar mapa plano sin rutas primero
var map = L.map('map').setView([latDestino, lngDestino], 13);

// 2. Pintar los mosaicos de OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// 3. Clavar el marcador de la base
L.marker([latDestino, lngDestino]).addTo(map)
    .bindPopup('<b>JEMPYC Base</b><br>Santa Catarina, N.L.')
    .openPopup();

// 4. Lógica de ruta aislada en un bloque try-catch para que si truena, el mapa no se borre
try {
    const esEntornoLocal = window.location.hostname === "localhost" || window.location.hostname === "127.0.0.1";

    if (esEntornoLocal) {
        console.log("Entorno local detectado. Trazando ruta desde Altica...");
        L.Routing.control({
            waypoints: [
                L.latLng(25.6944, -100.4328), // Altica
                L.latLng(latDestino, lngDestino)  // Base
            ],
            lineOptions: { styles: [{ color: '#007bff', opacity: 0.8, weight: 6 }] },
            show: true
        }).addTo(map);
    } else {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                L.Routing.control({
                    waypoints: [
                        L.latLng(position.coords.latitude, position.coords.longitude),
                        L.latLng(latDestino, lngDestino)
                    ],
                    lineOptions: { styles: [{ color: '#007bff', opacity: 0.8, weight: 6 }] },
                    show: true
                }).addTo(map);
            }, function(err) {
                console.log("GPS denegado en producción: " + err.message);
            });
        }
    }
} catch (error) {
    console.error("Error crítico en la extensión de rutas: ", error);
}