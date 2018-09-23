
// 	function initMap(){
//   var options = {
//     zoom: 8,
//     center:{lat:41.9973,lng: 21.4280}

//   }
//    var map = new google.maps.Map(document.getElementById('map'), options);


//    var marker = new google.maps.Marker({
//      position:{lat: 41.9973, lng: 21.4280},
//      map:  map
//    });

//   var infowindow = new google.maps.InfoWindow({
//   content:"Hello World!"
//   });

//    marker.addListener('click', function(){
//     infowindow.open(map,marker);
//    });


// }

 let map;
  function initMap(){
    let myPosition = new google.maps.LatLng(41.9973, 21.4280);
    
     let options =  {
        center: myPosition,
        zoom: 15,
        location: myPosition,
        radius:6500,
        types: ['book_store']
      }


    map = new google.maps.Map(document.getElementById('map'), options);

   let service  = new google.maps.places.PlacesService(map);
   service.nearbySearch(options, callback);
}
   function callback(results, status){
    if(status = google.maps.places.PlacesServiceStatus.OK){
      for(let i=0; i < results.length; i++){
        addMarker(results[i]);
      }
    }
   }
   function addMarker(place){
    // let placeLoc=place.geometry.location;
    let marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location
    });
   }


google.maps.event.addDomListener(window, 'load', initMap);
  
  