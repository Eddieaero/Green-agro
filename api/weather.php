<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Soil Analysis</title>
    <link rel="icon" href="/Green Agro/img/Group 6.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <style>
        #mapid {
            width: 500px;
            height: 500px;
        }
    </style>       
</head>
<body>
    <div id="mapid"></div>
    <script defer>
       var mymap = L.map('mapid').setView([-2.3326, 34.8140], 7);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets'
        }).addTo(mymap);
        
        var marker;

function onMapClick(e) {
    if (marker) {
        mymap.removeLayer(marker);
    }
    marker = L.marker(e.latlng).addTo(mymap);
    $('#latitude').val(e.latlng.lat.toFixed(6));
    $('#longitude').val(e.latlng.lng.toFixed(6));

    // Send the longitude and latitude values to weather.php using AJAX
    $.ajax({
        type: "POST",
        url: "weather.php",
        data: {
            latitude: e.latlng.lat.toFixed(6),
            longitude: e.latlng.lng.toFixed(6)
        },
        success: function(response) {
            // Display the current weather data on your website
            $('#weather-data').html(response);
        }
    });
}

mymap.on('click', onMapClick);
        

    </script>
    
</body>
</html>
<?php
// Obtain latitude and longitude from the user
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Set API endpoint URL with the appropriate API key, latitude and longitude
    $api_key = '0f76f33dd75ba677cacf5ea4b4947ff7';
    $url = "https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=$api_key";

    // Make a GET request to the API endpoint and retrieve the JSON response
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Parse the JSON response to extract the current weather data
    $data = json_decode($response);
    if (isset($data->main) && isset($data->wind) && isset($data->weather)) {
        $temperature = $data->main->temp;
        $humidity = $data->main->humidity;
        $wind_speed = $data->wind->speed;
        $weather = $data->weather[0]->main;

        // Display the current weather data on your website
        echo "<div class='weather-widget'>";
        echo "<div class='temperature'>$temperature&deg;C</div>";
        echo "<div class='weather'>$weather</div>";
        echo "<div class='humidity'>Humidity: $humidity%</div>";
        echo "<div class='wind'>Wind speed: $wind_speed m/s</div>";
        echo "</div>";
    } else {
        echo "Error: Unable to retrieve weather data for the specified location.";
    }
} else {
    echo "Error: Latitude and longitude not specified.";
}
?>