<?php
include "db/dbconfig.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Agro Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <script src="sidenav.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <!-- something went here -->
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary">
                            <img id="logo" src="img/Group 6.png" alt="#" />
                        </h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>


    <div class="container-fluid py-5" id="map">
    </div>

    <!-- Include Mapbox JavaScript SDK and access token -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />


    <!-- map customization -->
    <form method="post" action="process_field_map.php" name="place" id="place"><input type="text" name="lat" id="lat"><input type="text" name="lng" id="lng"><input type="submit" value="set field location" class="btn btn-success btn-sm " name="place" id="submit"></form>

    <style>
        #map {
            width: 100%;
            height: 700px;
        }

        #place {
            display: flex;
            position: fixed;
            bottom: 5px;
            left: 30px;
        }
    </style>

    <!-- JavaScript code -->
    <script>
        // Initialize the map with the access token and center coordinates
        mapboxgl.accessToken = "pk.eyJ1IjoiZWRkaWVndWxsZWQiLCJhIjoiY2w5NWppb2JnMDJiazNubG42dnJmaWhpeSJ9.ypTxiUIVKR1bjuqbgUHR2g";
        // Initialize the map with center coordinates of [0, 0] and zoom level of 1
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [0, 0],
            zoom: 9,
        });

        // Change the cursor type to "pointer" when hovering over the map
        map.on('mouseenter', function() {
            map.getCanvas().style.cursor = 'pointer';
        });

        // Change the cursor type back to the default when leaving the map
        map.on('mouseleave', function() {
            map.getCanvas().style.cursor = '';
        });

        // Add a marker to indicate the user's current location on the map
        var marker = new mapboxgl.Marker();

        // Get the user's current location using the Geolocation API
        navigator.geolocation.getCurrentPosition(function(position) {
            // Center the map on the user's current location
            map.setCenter([position.coords.longitude, position.coords.latitude]);

            // Set the marker at the user's current location
            marker.setLngLat([position.coords.longitude, position.coords.latitude]).addTo(map);
        });

        // Move the marker to the clicked point and update the input fields
        map.on('click', function(e) {
            // Move the marker to the clicked point
            marker.setLngLat([e.lngLat.lng, e.lngLat.lat]);

            // Update the input fields with the clicked point's latitude and longitude
            document.getElementById("lat").value = e.lngLat.lat;
            document.getElementById("lng").value = e.lngLat.lng;
        });
    </script>

    <?php // recover crops data;
    $_SESSION['crops'] = $_POST['crops']
    ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>