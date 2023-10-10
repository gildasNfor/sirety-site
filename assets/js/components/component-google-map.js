// Init any sliders here.
(function($) {
    function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 45.580660, lng: -73.678190 },
            zoom: 11,
            disableDefaultUI: true,
            // styles: [
            //     { elementType: 'geometry', stylers: [{ color: '#000f9f' }] },
            //     { elementType: 'labels.text.stroke', stylers: [{ color: '#242f3e' }] },
            //     { elementType: 'labels.text.fill', stylers: [{ color: '#746855' }] },
            //     {
            //         featureType: 'administrative.locality',
            //         elementType: 'labels.text.fill',
            //         stylers: [{ color: '#ffffff' }]
            //     },
            //     {
            //         "elementType": "labels.text.stroke",
            //         "stylers": [{ "visibility": "off" }]
            //     },
            //     {
            //         featureType: 'poi',
            //         elementType: 'labels.text.fill',
            //         stylers: [{ color: '#ffffff' }]
            //     },
            //     {
            //         featureType: 'poi.park',
            //         elementType: 'geometry',
            //         stylers: [{ color: '#00c4b3' }]
            //     },
            //     {
            //         featureType: 'poi.park',
            //         elementType: 'labels.text.fill',
            //         stylers: [{ color: '#ffffff' }]
            //     },
            //     {
            //         featureType: 'road',
            //         elementType: 'geometry',
            //         stylers: [{ color: '#3d427a' }]
            //     },
            //     {
            //         featureType: 'road',
            //         elementType: 'geometry.stroke',
            //         stylers: [{ color: '#3d427a' }]
            //     },
            //     {
            //         featureType: 'road',
            //         elementType: 'labels.text.fill',
            //         stylers: [{ color: '#ffffff' }]
            //     },
            //     {
            //         featureType: 'road.highway',
            //         elementType: 'geometry',
            //         stylers: [{ color: '#3d427a' }]
            //     },
            //     {
            //         featureType: 'road.highway',
            //         elementType: 'geometry.stroke',
            //         stylers: [{ color: '#3d427a' }]
            //     },
            //     {
            //         featureType: 'road.highway',
            //         elementType: 'labels.text.fill',
            //         stylers: [{ color: '#ffffff' }]
            //     },
            //     {
            //         featureType: 'transit',
            //         elementType: 'geometry',
            //         stylers: [{ color: '#ffffff' }]
            //     },
            //     {
            //         featureType: 'transit.station',
            //         elementType: 'labels.text.fill',
            //         stylers: [{ color: '#00c4b3' }]
            //     },
            //     {
            //         featureType: 'water',
            //         elementType: 'geometry',
            //         stylers: [{ color: '#00c4b3' }]
            //     },
            //     {
            //         featureType: 'water',
            //         elementType: 'labels.text.fill',
            //         stylers: [{ color: '#ffffff' }]
            //     },
            //     {
            //         featureType: 'water',
            //         elementType: 'labels.text.stroke',
            //         stylers: [{ color: '#000f9f' }]
            //     }
            // ]
        });
    }
    setTimeout(function(){ 
        if ($('#map').length) {
            initMap();
        }
    }, 1000);
}(jQuery));