<?php
function generateRandomSoilConditions()
{
  $pH_level = mt_rand(60, 70) / 10;  // random float between 6.0 and 7.0
  $nutrient_content = mt_rand(80, 120);
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
$farm_condition = generateRandomSoilConditions();
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
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
          <p class="h1 m-0">BD</p>
        </a>
      </div>
      <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
      <ul class="list-unstyled">
        <li class="sidebar-item"><a class="sidebar-link" href="dashboard.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Land </a></li>

        <li class="sidebar-item"><a class="sidebar-link" href="soil_management.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Soil & Crop monitoring </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="crop_survey.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Start A project </a></li>
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
                <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs"> </span><strong class="text-primary text-sm">Dashboard</strong></div>
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
                      <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
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
      <div class="container-fluid">
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
      </div>
    </section>
    <!-- Header Section-->
    <section class="bg-white py-5">
      <div class="container-fluid">
        <div class="row d-flex align-items-md-stretch">

          <!-- Line Chart -->
          <div class="col-lg-6 col-md-12">
            <div class="card shadow-0">
              <h2 class="h3 fw-normal">Changes in soil properties</h2>
              <p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>

          <!-- To Do List-->
          <div class="col-lg-3 col-md-6">
            <div class="card shadow-0">
              <div class="card-body p-0">
                <h2 class="h3 fw-normal">To do List</h2>
                <form>
                  <h5>Actions to take based on soil changes:</h5>
                  <?php $i = rand(1, 3);
                  if ($i < 2) { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list1">
                      <label class="form-check-label text-sm" for="list1">Soil pH is too low, add lime to raise soil pH.</label>
                    </div>
                  <?php } else { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list2">
                      <label class="form-check-label text-sm" for="list2">Soil pH is too high, add sulfur to lower soil pH.</label>
                    </div>
                  <?php } ?>

                  <?php $i = rand(1, 3);
                  if ($i < 2) { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list3">
                      <label class="form-check-label text-sm" for="list3">Nitrogen content is too low, add nitrogen-rich fertilizers to improve plant growth.</label>
                    </div>
                  <?php } else { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list4">
                      <label class="form-check-label text-sm" for="list4">Nitrogen content is too high, reduce the use of nitrogen fertilizers or switch to using organic fertilizers.</label>
                    </div>
                  <?php } ?>
                  <?php $i = rand(1, 3);
                  if ($i < 2) { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list5">
                      <label class="form-check-label text-sm" for="list5">Organic matter content is too low, consider adding compost or other organic matter to the soil to improve soil structure and fertility.</label>
                    </div>
                  <?php } else { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list6">
                      <label class="form-check-label text-sm" for="list6">Organic matter content is too high, consider reducing the amount of organic matter added or planting crops that are less tolerant of high organic matter levels.</label>
                    </div>
                  <?php } ?>
                </form>
                <!-- for demonstration -->


              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">

            <div class="card green-card">
              <div class="card-header">
                Soil Moisture
              </div>
              <div class="card-body">
                <p>If soil moisture is too low, consider implementing irrigation or adjusting the irrigation schedule to ensure crops receive enough water.</p>
                <p>If soil moisture is too high, take measures to improve drainage, such as installing drainage tiles or adjusting the slope of the land.</p>
              </div>
            </div>
            <div class="card green-card">
              <div class="card-header">
                Soil Temperature
              </div>
              <div class="card-body">
                <p>If soil temperature is too low, consider planting crops that are better suited to cooler temperatures or using techniques like mulching or row covers to retain heat.</p>
                <p>If soil temperature is too high, consider planting crops that are more heat-tolerant or using techniques like shading or misting to cool the soil.</p>
              </div>
            </div>
            <div class="card green-card">
              <div class="card-header">
                pH Level
              </div>
              <div class="card-body">
                <p>If the soil pH is too low, consider adding lime or other soil amendments to raise the pH level and make the soil more alkaline.</p>
                <p>If the soil pH is too high, consider adding sulfur or other soil amendments to lower the pH level and make the soil more acidic.</p>
              </div>
            </div>
            <div class="card green-card">
              <div class="card-header">
                Nitrogen Content
              </div>
              <div class="card-body">
                <p>If the nitrogen content is too low, consider applying nitrogen fertilizers or planting cover crops that fix nitrogen in the soil.</p>
                <p>If the nitrogen content is too high, consider reducing the amount of nitrogen fertilizer applied or planting crops that are less dependent on nitrogen.</p>
              </div>
            </div>
            <div class="card green-card">
              <div class="card-header">
                Phosphorus Content
              </div>
              <div class="card-body">
                <p>If the phosphorus content is too low, consider applying phosphorus fertilizers or planting cover crops that accumulate phosphorus in the soil.</p>
                <p>If the phosphorus content is too high, consider reducing the amount of phosphorus fertilizer applied or planting crops that are less dependent on phosphorus.</p>
              </div>
            </div>
            <div class="card green-card">
              <div class="card-header">
                Potassium Content
              </div>
              <div class="card-body">
                <p>If the potassium content is too low, consider applying potassium fertilizers or planting cover crops that accumulate potassium in the soil.</p>
                <p>If the potassium content is too high, consider reducing the amount of potassium fertilizer applied or planting crops that are less dependent on potassium.</p>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <script>
    $(document).ready(function() {
      $("#lineCahrt").click(function() {
        $(".form-check").toggle(); // toggle visibility of all form-check elements
        $(".form-check:hidden").slice(2).show(); // show only the first 2 hidden form-check elements
      });

      // card -playlist
      // var cards = $(".green-card");
      // var currentCard = 0;

      // function nextCard() {
      //   cards.removeClass("active");
      //   cards.eq(currentCard).addClass("active");
      //   currentCard = (currentCard + 1) % cards.length;
      // }

      // // Show first card
      // cards.eq(currentCard).addClass("active");

      // // Set interval to change card every 3 seconds
      // 

      $(".green-card").hide();
      $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
      setInterval(() => {
        $(".green-card").hide();
        $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
      }, 3000);
    });
  </script>

</body>

</html>