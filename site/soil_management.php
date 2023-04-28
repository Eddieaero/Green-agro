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
                <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs"> </span><strong class="text-primary text-sm">Field Management</strong></div>
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
    <!-- Counts Section -->
    <section class="py-5">
      <?php
      $owner = $_SESSION['id'];
      $farms = "SELECT * FROM field WHERE owner = '$owner'";
      $farms = $conn->query($farms);
      while ($farm = $farms->fetch_assoc()) {
        $field_id = $farm['id'];
        $farm_condition = generateRandomSoilConditions();
      ?>
        <!-- farm -->
        <div class="container-fluid" style="margin-top:20px; padding-bottom:20px;">
          <h5 class="display-5"><?php echo $farm['name']; ?></h5>
          <h6 class="text-muted my-3">current soil status</h6>

          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#user-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Soil moisture</h3>
                  <p class="text-gray-500 small">(status)</p>
                  <p class="display-6 mb-0"><?php echo $farm_condition['soil_moisture'] ?></p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#survey-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Nutrient</h3>
                  <p class="text-gray-500 small">Level</p>
                  <p class="display-6 mb-0"><?php echo $farm_condition['nutrient_content'] ?> </p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#list-details-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">pH level</h3>
                  <p class="text-gray-500 small">measured in pH units</p>
                  <p class="display-6 mb-0"><?php echo $farm_condition['pH_level'] ?></p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#survey-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Soil temp..</h3>
                  <p class="text-gray-500 small">(measured in °C)</p>
                  <p class="display-6 mb-0"><?php echo $farm_condition['soil_temp'] ?>° </p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#numbers-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Texture </h3>
                  <p class="text-gray-500 small" title="(measured in parts per million)">make</p>
                  <p class="display-6 mb-0"> <?php echo $farm_condition['soil_texture'] ?></p>
                </div>
              </div>
            </div>


            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#paper-stack-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Organic Matter </h3>
                  <p class="text-gray-500 small">Content</p>
                  <p class="display-6 mb-0"><?php echo $farm_condition['organic_matter']; ?></p>
                </div>
              </div>
            </div>
          </div>


          <h6 class="text-muted my-3">Crops Planted in Field</h6>
          <div class="row">
            <?php
            $crops = $conn->query("SELECT * FROM crop_field WHERE field_id = '$field_id' ");
            while ($row = $crops->fetch_assoc()) {
              $crop = $conn->query("SELECT * FROM crop where id=" . $row['crop_id'])->fetch_assoc();

              $crop_harvest_time = $crop['days_to_harvest'];
              $harvest_date = $row['harvest_date'];
              // days from now to harvest date
              $days_to_harvest = (strtotime($harvest_date) - strtotime(date("Y-m-d"))) / (60 * 60 * 24);
              // days from now to planting date
              $days_from_planting = ($crop_harvest_time - $days_to_harvest);

              // ignore tea
              if ($crop['name'] == "Tea") {
                continue;
              }
            ?>
              <!-- crop in a field -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <span class="text-info text-uppercase"><?php echo $crop['name'] ?></span>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">

                        <img src="img/crops/maize.jpg" alt="" class="img-fluid rounded my-3">

                        <h3 class="h4 text-dark text-uppercase fw-normal">Life till harvest</h3>
                        <canvas class="col-12" id="chart-<?php echo $crop['name'] ?>"></canvas>

                        <script>
                          var PIECHART = document.getElementById("chart-<?php echo $crop['name'] ?>");
                          var target_color = generateRandomColor();
                          var myPieChart = new Chart(PIECHART, {
                            type: "doughnut",
                            data: {
                              labels: ["Harvest time (days)", "Time Passed"],
                              datasets: [{
                                data: [<?php echo $days_to_harvest; ?>, <?php echo $days_from_planting; ?>],
                                borderWidth: [1, 1],
                                backgroundColor: [brandPrimary, target_color, "#FFCE56"],
                                hoverBackgroundColor: [brandPrimary, "rgba(75,192,192,1)", "#FFCE56"],
                              }, ],
                            },
                          });
                        </script>
                      </div>


                      <div class="col-sm-12 col-md-6 col-lg-8">
                        <h3 class="h4 text-dark text-uppercase fw-normal">Influence On Soil</h3>
                        <div class="table-responsive">
                          <!-- crop data -->
                          <?php
                          $crop_data = $conn->query("SELECT * FROM crop_condition WHERE crop_id = " . $crop['id'])->fetch_assoc();

                          $max_ph_level = $crop_data['max_ph_level'];
                          $min_ph_level = $crop_data['min_ph_level'];
                          $ph_level = $farm_condition['pH_level'];
                          $ph_status = ($ph_level >= $min_ph_level && $ph_level <= $max_ph_level) ? 'good' : 'bad';

                          $max_nutrient_content = $crop_data['max_nutrient_content'];
                          $min_nutrient_content = $crop_data['min_nutrient_content'];
                          $nutrient_content = $farm_condition['nutrient_content'];
                          $nutrient_status = ($nutrient_content >= $min_nutrient_content && $nutrient_content <= $max_nutrient_content) ? 'good' : 'bad';

                          $max_organic_matter = $crop_data['max_organic_matter'];
                          $min_organic_matter = $crop_data['min_organic_matter'];
                          $organic_matter = $farm_condition['organic_matter'];
                          $organic_matter_status = ($organic_matter >= $min_organic_matter && $organic_matter <= $max_organic_matter) ? 'good' : 'bad';

                          $max_soil_moisture = $crop_data['max_soil_moisture'];
                          $min_soil_moisture = $crop_data['min_soil_moisture'];
                          $soil_moisture = $farm_condition['soil_moisture'];
                          $soil_moisture_status = ($soil_moisture >= $min_soil_moisture && $soil_moisture <= $max_soil_moisture) ? 'good' : 'bad';

                          $max_soil_temp = $crop_data['max_soil_temp'];
                          $min_soil_temp = $crop_data['min_soil_temp'];
                          $soil_temp = $farm_condition['soil_temp'];
                          $soil_temp_status = ($soil_temp >= $min_soil_temp && $soil_temp <= $max_soil_temp) ? 'good' : 'bad';

                          $max_precipitation = $crop_data['max_precipitation'];
                          $min_precipitation = $crop_data['min_precipitation'];
                          $precipitation = $farm_condition['precipitation'];
                          $precipitation_status = ($precipitation >= $min_precipitation && $precipitation <= $max_precipitation) ? 'good' : 'bad';

                          $max_temperature = $crop_data['max_temperature'];
                          $min_temperature = $crop_data['min_temperature'];
                          $temperature = $farm_condition['temperature_max'];
                          $temperature_status = ($temperature >= $min_temperature && $temperature <= $max_temperature) ? 'good' : 'Higher Temperature';

                          $crop_status = ($ph_status == 'good' && $nutrient_status == 'good' && $organic_matter_status == 'good' && $soil_moisture_status == 'good' && $soil_temp_status == 'good' && $precipitation_status == 'good' && $temperature_status == 'good') ? 'Healthy' : 'Unhealthy';

                          ?>
                          <table class="table text-sm mb-0">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Required Value</th>
                                <th>Current Value</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Soil moisture</td>
                                <td><?php echo $min_soil_moisture ?></td>
                                <td><?php echo $soil_moisture ?></td>
                                <td><?php echo $soil_moisture_status ?></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Soil Temperature</td>
                                <td><?php echo $temperature ?></td>
                                <td><?php echo $max_temperature ?></td>
                                <td><?php echo $temperature_status ?></td>
                              </tr>
                              <tr>
                                <th colspan="5">Soil Adjustment Suggestions</th>
                              </tr>
                              <tr>
                                <td colspan="5">
                                  <?php echo soilManagementSuggestions($crop['name'], $soil_moisture, $max_temperature); ?>
                                </td>
                              </tr>
                            </tbody>
                          </table>



                          <div class="col-sm-12 mt-5">
                            <h3 class="h4 text-dark text-uppercase fw-normal">Crop Growth</h3>
                            <?php
                            $crop_stage = $conn->query("SELECT * FROM crop_stages WHERE crop_id = " . $crop['id']);
                            ?>
                            <table class="table text-sm mb-0">
                              <thead>
                                <tr>
                                  <th>TimeFrame (weeks)</th>
                                  <th>Observable Changes</th>
                                  <th>Possible Issues</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($crop_stage as $key => $crop_stage) { ?>
                                  <tr>
                                    <td><?php echo $crop_stage['expected_week'] ?></td>
                                    <td><?php echo $crop_stage['observable_changes'] ?></td>
                                    <td><?php echo $crop_stage['possible_issues'] ?></td>
                                  </tr>
                                <?php } ?>
                                <!-- add a full width row with a button saying Progress -->
                                <tr>
                                  <td colspan="3">
                                    <a href="crop_data.php?crop_id=<?php echo $crop['id'] ?>" class="btn btn-primary btn-sm">Progress</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <div>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!-- end crop in farm -->
                </div>
              </div>
            <?php } ?>
    </section>

  </div>
  <!-- JavaScript files-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/just-validate/js/just-validate.min.js"></script>
  <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
  <script src="js/charts-home.js"></script>
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



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">




</body>

</html>