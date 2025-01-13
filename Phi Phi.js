// Initialize Google Maps
function initMap() {
    const phiPhiLocation = { lat: 7.7407, lng: 98.7784 };
    const map = new google.maps.Map(document.getElementById("map-container"), {
        zoom: 10,
        center: phiPhiLocation,
    });
    const marker = new google.maps.Marker({
        position: phiPhiLocation,
        map: map,
        title: "Phi Phi Islands",
    });
}

// Load the Google Maps API
const script = document.createElement("script");
script.src = `https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap`;
script.async = true;
script.defer = true;
document.head.appendChild(script);
