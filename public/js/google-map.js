
var google;


function init() {
	
    var myLatlng = new google.maps.LatLng(24.922464, 67.084912);
	var uluru = { lat: 24.922464, lng: 67.084912 };
	
    var mapOptions = {
        zoom: 16,
        center: myLatlng,
        scrollwheel: false,
        
    };


    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);
	
	var marker = new google.maps.Marker({ position: myLatlng, map: map });

    // var addresses = ['Pakistan'];

    // for (var x = 0; x < addresses.length; x++) {
    //     $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&sensor=false', null, function (data) {
    //         var p = data.results[0].geometry.location;
    //         var latlng = new google.maps.LatLng(p.lat, p.lng);
    //         new google.maps.Marker({
    //             position: latlng,
    //             map: map,
    //             icon: 'images/loc.png'
    //         });

    //     });
    // }
    
}
google.maps.event.addDomListener(window, 'load', init);