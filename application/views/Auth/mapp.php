<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <style media="screen">
    #map{
      height: 300px;
      width: auto;
      border-radius: 13px;
    }/* navbar */
    </style>
    <style media="screen">
  </style>
    <title><?= $title ?></title>
  </head>
  <body class="bg-light">
    <input type="text" name="" id="lat" >
    <input type="text" name="" id="lng">

    <div id="map">

    </div>
    <script type="text/javascript">
    var map = L.map('map').setView([-6.310611,106.111056],12);
    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=HmjFo1k1lKBbT3vn9HWh',{
      attribution:'<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    }).addTo(map);
    // var layer = new Array();
    // var marker = L.marker([-6.315639777558507, 106.12071990966797]);
    // marker.addTo(map);
    // layer = marker;
    // map.on('click', function(e){
    // var latlng = e.latlng;
    // var lat = latlng.lat;
    // var lng = latlng.lng;
    // var newLatLng = new L.LatLng(lat, lng);
    // layer.setLatLng(newLatLng);
    // console.log(layer);
    // });
    var marker = new L.marker([-6.315639777558507, 106.12071990966797]);
    marker.addTo(map);

    map.on('click', function(e){
    var latlng = e.latlng;
    var lat = latlng.lat;
    var lng = latlng.lng;
    var newLatLng = new L.LatLng(lat, lng);
    marker.setLatLng(newLatLng);
    document.getElementById('lat').value = lat;
    document.getElementById('lng').value = lng;
    });

    </script>

  </body>
</html>
