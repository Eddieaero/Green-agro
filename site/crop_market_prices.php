<?php include('db/dbconfig.php');

function _generateRandomSoilConditions()
{
    $pH_level = mt_rand(60, 70) / 10;  // random float between 6.0 and 7.0
    $nutrient_content = mt_rand(80, 120); // 😅(unknown unit)
    $organic_matter = mt_rand(20, 40) / 10;  // random float between 2.0 and 4.0
    $soil_texture_options = array("clayey", "sandy", "loamy");
    $soil_texture = $soil_texture_options[array_rand($soil_texture_options)];
    $soil_moisture = mt_rand(18, 30);  // random integer between 18 and 30
    $soil_temp = mt_rand(15, 25);  // random integer between 15 and 25

    return array(
        "pH_level" => $pH_level,
        "nutrient_content" => $nutrient_content,
        "organic_matter" => $organic_matter,
        "soil_texture" => $soil_texture,
        "soil_moisture" => $soil_moisture,
        "soil_temp" => $soil_temp
    );
}

function generateRandomSoilConditions()
{
    $pH_level = mt_rand(60, 70) / 10;  // random float between 6.0 and 7.0
    $nutrient_content = mt_rand(80, 120); // 😅(unknown unit)
    $organic_matter = mt_rand(20, 40) / 10;  // random float between 2.0 and 4.0
    $soil_texture_options = array("clayey", "sandy", "loamy");
    $soil_texture = $soil_texture_options[array_rand($soil_texture_options)];
    $soil_moisture = mt_rand(18, 30);  // random integer between 18 and 30
    $soil_temp = mt_rand(15, 35);  // random integer between 15 and 35, adjusted for Tanzania temperature range
    $precipitation = mt_rand(0, 500); // random integer between 0 and 500, representing mm of rainfall per month
    $crop_ph_level = mt_rand(50, 70) / 10; // random float between 5.0 and 7.0, representing ideal pH level for the crop
    $temperature_min = mt_rand(18, 24); // random integer between 18 and 24, representing the minimum temperature required for the crop
    $temperature_max = mt_rand(26, 35); // random integer between 26 and 35, representing the maximum temperature required for the crop

    return array(
        "pH_level" => $pH_level,
        "nutrient_content" => $nutrient_content,
        "organic_matter" => $organic_matter,
        "soil_texture" => $soil_texture,
        "soil_moisture" => $soil_moisture,
        "soil_temp" => $soil_temp,
        "precipitation" => $precipitation,
        "crop_ph_level" => $crop_ph_level,
        "temperature_min" => $temperature_min,
        "temperature_max" => $temperature_max
    );
}




function soilManagementSuggestions($plantName, $soilMoisture, $soilTemperature)
{
    $suggestions = '';

    // Soil moisture suggestions
    if ($soilMoisture < 20) {
        $suggestions .= "Consider implementing irrigation or adjusting the irrigation schedule to ensure crops receive enough water. ";
    } elseif ($soilMoisture > 80) {
        $suggestions .= "Take measures to improve drainage, such as installing drainage tiles or adjusting the slope of the land. ";
    }

    // Soil temperature suggestions
    if ($soilTemperature < 15) {
        $suggestions .= "Consider planting crops that are better suited to cooler temperatures or using techniques like mulching or row covers to retain heat. ";
    } elseif ($soilTemperature > 30) {
        $suggestions .= "Consider planting crops that are more heat-tolerant or using techniques like shading or misting to cool the soil. ";
    }

    // Add specific suggestions based on the plant name
    switch ($plantName) {
        case 'Tomato':
            $suggestions .= "Tomatoes prefer slightly acidic soil with a pH between 6.0 and 6.8. Consider adding compost or manure to the soil to improve fertility. ";
            break;
        case 'Lettuce':
            $suggestions .= "Lettuce prefers consistently moist soil. Consider using drip irrigation or mulching to retain moisture. ";
            break;
        case 'Carrot':
            $suggestions .= "Carrots prefer loose, well-drained soil. Consider adding sand or perlite to improve soil structure. ";
            break;
        case 'Maize':
            $suggestions .= "Maize prefers well-drained soil with a pH between 5.5 and 7.5. Consider adding nitrogen-rich fertilizers for optimum growth. ";
            break;
        case 'Rice':
            $suggestions .= "Rice prefers moist, well-drained soil with a pH between 5.5 and 6.5. Consider using flooded irrigation or planting in low-lying areas. ";
            break;
        case 'Cassava':
            $suggestions .= "Cassava prefers well-drained soil with a pH between 4.5 and 7.0. Consider adding organic matter to improve soil fertility. ";
            break;
        case 'Beans':
            $suggestions .= "Beans prefer well-drained soil with a pH between 6.0 and 7.5. Consider adding phosphorus-rich fertilizers for optimum growth. ";
            break;
        case 'Peanuts':
            $suggestions .= "Peanuts prefer well-drained soil with a pH between 5.9 and 7.0. Consider adding potassium-rich fertilizers for optimum growth. ";
            break;
        case 'Sweet potatoes':
            $suggestions .= "Sweet potatoes prefer well-drained, sandy soil with a pH between 5.0 and 6.5. Consider adding nitrogen-rich fertilizers for optimum growth. ";
            break;
        case 'Sorghum':
            $suggestions .= "Sorghum prefers well-drained soil with a pH between 5.5 and 7.5. Consider adding nitrogen-rich fertilizers for optimum growth. ";
            break;
        case 'Cotton':
            $suggestions .= "Cotton prefers well-drained soil with a pH between 5.5 and 7.5. Consider adding nitrogen-rich fertilizers for optimum growth. ";
            break;
        case 'Coffee':
            $suggestions .= "Coffee prefers well-drained, slightly acidic soil with a pH between 6.0 and 6.5. Consider adding organic matter to improve soil fertility. ";
            break;
        case 'Tea':
            $suggestions .= "Tea prefers well-drained, slightly acidic soil with a pH between 4.5 and 5.5. Consider adding nitrogen-rich fertilizers for optimum growth. ";
            break;
        default:
            $suggestions .= "No specific Soil & Crop monitoring suggestions available for this plant. ";
    }


    return $suggestions;
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Green Agro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var brandPrimary = "#33b35a";

        function generateRandomColor() {
            var r = Math.floor(Math.random() * 256);
            var g = Math.floor(Math.random() * 256);
            var b = Math.floor(Math.random() * 256);
            var a = Math.random().toFixed(1);
            return "rgba(" + r + ", " + g + ", " + b + ", " + a + ")";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" differ></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />

    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
</head>

<body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-inner">
            <!-- Sidebar Header    -->
            <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center"><img id="logo" class="dashlog" src="img/Group 6.png" alt="#" />
                    <!-- <h2 class="h5 text-white text-uppercase mb-0">Nathan Andrews</h2>
            <p class="text-sm mb-0 text-muted">Web Developer</p> -->
                </div>
                <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="/site/">
                    <p class="h1 m-0">BD</p>
                </a>
            </div>
            <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
            <ul class="list-unstyled">
                <li class="sidebar-item"><a class="sidebar-link" href="dashboard.php">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                            <use xlink:href="#real-estate-1"> </use>
                        </svg>Home </a></li>

                <li class="sidebar-item"><a class="sidebar-link" href="crop_survey.php">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                            <use xlink:href="#portfolio-grid-1"> </use>
                        </svg>Start A project </a></li>

                <li class="sidebar-item"><a class="sidebar-link" href="soil_management.php">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                            <use xlink:href="#sales-up-1"> </use>
                        </svg>Soil & Crop monitoring </a></li>

                <li class="sidebar-item"><a class="sidebar-link" href="crop_market_prices.php">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                            <use xlink:href="#sales-up-1"> </use>
                        </svg>Crop Market Trends </a></li>
            </ul>
        </div>
    </nav>

    <div class="page">
        <!-- navbar-->
        <header class="header mb-5 pb-3">
            <nav class="nav navbar fixed-top">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                                    <use xlink:href="#menu-1"> </use>
                                </svg></a><a class="navbar-brand ms-2" href="index.html">
                                <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs"> </span><strong class="text-primary text-sm">Crop Prices</strong></div>
                            </a></div>
                        <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">

                            <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="notifications">
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-blue">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#envelope-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600"></span><small class="small text-gray-600"></small></div>
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-green">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#chats-1"> </use>
                                                </svg>
                                            </div>
                                            <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">4 minutes ago</small></div> -->
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-orange">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#checked-window-1"> </use>
                                                </svg>
                                            </div>
                                            <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted</span><small class="small text-gray-600">8 minutes ago</small></div> -->
                                        </div>
                                    </a></li>
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-green">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#chats-1"> </use>
                                                </svg>
                                            </div>
                                            <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">10 minutes ago</small></div> -->
                                        </div>
                                    </a></li>
                                <!-- <li><a class="dropdown-item all-notifications text-center" href="#!"> <strong class="text-xs text-gray-600">view all notifications  </strong></a></li> -->
                            </ul>
                            </li>

                    </div>
                </div>
            </nav>
        </header>

        <section class="py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <span class="h2">Crop Prices & Historical Trends</span>
                        <div class="col-12">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Crop Name</th>
                                        <th>Market</th>
                                        <th>Unit</th>
                                        <th>Price</th>
                                        <th>Price Type</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $prices = $conn->query("select * from market_data limit 10");
                                    while ($price = $prices->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $price['id'] ?></td>
                                            <td><?php echo $price['commodity'] ?></td>
                                            <td><?php echo $price['market'] ?></td>
                                            <td><?php echo $price['unit'] ?></td>
                                            <td><?php echo $price['price'] ?></td>
                                            <td><?php echo $price['pricetype'] ?></td>
                                            <td><?php echo $price['date'] ?></td>
                                        </tr>

                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="row">
                            <!-- filters -->
                            <div class="col-12 bg-light rounded">
                                <div class="row">
                                    <div class="col">
                                        <select name="zero" id="marketSelect" class="form-control">
                                            <option value="0">Market Name</option>
                                            <?php
                                            $markets = $conn->query("select distinct market from market_data");
                                            while ($market = $markets->fetch_assoc()) {
                                            ?>
                                                <option value=" <?php echo $market['market'] ?> "> <?php echo $market['market'] ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="zero" id="productSelect" class="form-control card">
                                            <option value="0">Product Name</option>
                                            <option value="Rice">Rice</option>
                                            <option value="Maize">Maize</option>
                                            <option value="Beans">Beans</option>
                                        </select>
                                    </div>

                                    <script>
                                        // Get the select input elements
                                        var marketSelect = document.getElementById('marketSelect');
                                        var productSelect = document.getElementById('productSelect');

                                        // Listen for changes on the select inputs
                                        marketSelect.addEventListener('change', redirectToPage);
                                        productSelect.addEventListener('change', redirectToPage);

                                        // Function to redirect to the page with updated URL parameters
                                        function redirectToPage() {
                                            // Get the current URL
                                            var currentUrl = window.location.href;

                                            // Get the selected values of the select inputs
                                            var selectedMarket = marketSelect.value;
                                            var selectedProduct = productSelect.value;

                                            // Construct the new URL with updated parameters
                                            var newUrl = currentUrl.split('?')[0] + '?market=' + selectedMarket + '&product=' + selectedProduct;

                                            // Redirect to the new URL
                                            window.location.href = newUrl;
                                        }
                                    </script>

                                    <div class="col-12 p-1">
                                        <div class="card">
                                            <div class="card-body"><canvas id="trend_chart"></canvas></div>
                                        </div>

                                    </div>


                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                    <!-- pre process market data -->
                                    <?php
                                    // check if a specific market is set
                                    if (isset($_GET['market']) && $_GET['market'] != 0) {
                                        $m = $_GET['market'];

                                        $sql = "SELECT DATE_FORMAT(date, '%M %Y') AS month_year, SUM(price) AS total_price FROM market_data WHERE market = '$m' GROUP BY YEAR(date), MONTH(date)";
                                        // Execute query and get result
                                        $result = $conn->query($sql);

                                        // Initialize empty arrays for chart data
                                        $labels = array();
                                        $data = array();

                                        // Loop through the query result and populate chart data arrays
                                        while ($row = $result->fetch_assoc()) {
                                            $labels[] = $row['month_year'];
                                            $data[] = $row['total_price'];
                                        }

                                        // Create chart data object
                                        $chart_data = array(
                                            'labels' => $labels,
                                            'datasets' => array(
                                                array(
                                                    'type' => 'line',
                                                    'label' => $m,
                                                    'data' => $data,
                                                    'borderColor' => 'rgb(255, 99, 132)',
                                                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)'
                                                )
                                            )
                                        );
                                    } else if (isset($_GET['product']) && $_GET['product'] != 0) {
                                        $p = $_GET['product'];
                                        $query = "SELECT DATE_FORMAT(date, '%M %Y') AS month_year, SUM(price) AS total_price FROM market_data WHERE commodity = '$p' GROUP BY YEAR(date), MONTH(date)";

                                        // Execute query and get result
                                        $result = $conn->query($query);

                                        // Initialize empty arrays for chart data
                                        $labels = array();
                                        $data = array();

                                        // Loop through the query result and populate chart data arrays
                                        while ($row = $result->fetch_assoc()) {
                                            $labels[] = $row['month_year'];
                                            $data[] = $row['total_price'];
                                        }

                                        // Create chart data object
                                        $chart_data = array(
                                            'labels' => $labels,
                                            'datasets' => array(
                                                array(
                                                    'type' => 'line',
                                                    'label' => $p.'Prices',
                                                    'data' => $data,
                                                    'borderColor' => 'rgb(255, 99, 132)',
                                                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)'
                                                )
                                            )
                                        );
                                    } else {
                                        $query =  "SELECT date, commodity, SUM(price) AS total_price FROM market_data GROUP BY date, commodity ORDER BY date asc, commodity ASC";
                                        // Query the database to get the dates and sum of product prices for each product
                                        $result = $conn->query($query);

                                        // Create arrays for the chart data
                                        $labels = array();
                                        $datasets = array();

                                        // Keep track of the products we've already added as datasets
                                        $added_products = array();

                                        // Iterate over the query result and add the data to the chart arrays
                                        while ($row = $result->fetch_assoc()) {
                                            // Format the date as "Month Year"
                                            $formatted_date = date("F Y", strtotime($row['date']));

                                            // Add the date to the labels array if it hasn't been added yet
                                            if (!in_array($formatted_date, $labels)) {
                                                $labels[] = $formatted_date;
                                            }

                                            // Check if we've already added a dataset for this product
                                            $product_key = $row['commodity'];
                                            if (!array_key_exists($product_key, $added_products)) {
                                                // Create a new dataset for this product
                                                $new_dataset = array(
                                                    "type" => "line",
                                                    "label" => $row['commodity'],
                                                    "data" => array(),
                                                    "borderColor" => "rgb(255, " . rand(0, 255) . ", " . rand(0, 255) . ")", // Use a random color for the border
                                                    "fill" => false
                                                );

                                                // Add the new dataset to the datasets array
                                                $datasets[] = $new_dataset;

                                                // Add the product to the list of added products
                                                $added_products[$product_key] = count($datasets) - 1;
                                            }

                                            // Add the total price for this product on this date to the appropriate dataset
                                            $dataset_index = $added_products[$product_key];
                                            $datasets[$dataset_index]["data"][] = $row['total_price'];
                                        }

                                        // Prepare the chart data object
                                        $chart_data = array(
                                            "labels" => $labels,
                                            "datasets" => $datasets
                                        );
                                    }

                                    ?>
                                    <!-- products from target market -->
                                    <script>
                                        const ctx = document.getElementById('trend_chart');

                                        new Chart(ctx, {
                                            type: 'bar',
                                            data: <?php echo json_encode($chart_data); ?>,
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    </script>

                                </div>
                            </div>

                            <div class="col-12">
                                <iframe src="https://allafrica.com/list/aans/post/af/cat/agriculture/pubkey/publisher:editorial:00010656.html" frameborder="0" class="border-light rounded col-12" style="height: 300px" sandbox="allow-scripts"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>


    <script>
        const AccuWeather = "ncL8ozIdBB0n57EPg2LoEIEhjgZFjooI"

        const apiKey = AccuWeather; // Replace with your API key from AccuWeather
        const lat = 37.7749; // Replace with the latitude of the location you want to get weather data for
        const lon = -122.4194; // Replace with the longitude of the location you want to get weather data for
        const apiUrl = `https://dataservice.accuweather.com/currentconditions/v1/${getLocationKey(lat, lon)}?apikey=${apiKey}`;

        // Helper function to get the location key for a given latitude and longitude
        function getLocationKey(lat, lon) {
            const locationApiUrl = `https://dataservice.accuweather.com/locations/v1/cities/geoposition/search?apikey=${apiKey}&q=${lat},${lon}`;
            const xhr = new XMLHttpRequest();
            xhr.open("GET", locationApiUrl, false);
            xhr.send();
            const response = JSON.parse(xhr.responseText);
            return response.Key;
        }

        // Make a GET request to the AccuWeather API using the XMLHttpRequest object
        const xhr = new XMLHttpRequest();
        xhr.open("GET", apiUrl, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                // Extract the relevant weather data from the API response
                const data = JSON.parse(xhr.responseText);
                const temperature = data.Temperature.Metric.Value;
                const description = data.WeatherText;
                const precipitation = data.HasPrecipitation;

                // Log the weather data to the console
                console.log(`Current weather at (${lat}, ${lon}):`);
                console.log(`Temperature: ${temperature} C`);
                console.log(`Description: ${description}`);
                console.log(`Precipitation: ${precipitation} `);
            }
        };
        xhr.send();
    </script>




    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>


</body>

</html>