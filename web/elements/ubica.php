<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>

    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat:18.9585129, lng: -98.7526902};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChK6Cszd6p_aGAMxX-EhCWHb2SdzMiFhw&callback=initMap">
    </script>
  </body>
</html>