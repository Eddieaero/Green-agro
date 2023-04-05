<?php
include "db/dbconfig.php";
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
  <link href="css/style.css" rel="stylesheet">
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

    <section class="py-5">
      <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
          <div class="col-lg-3">
            <!-- <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+012 345 6789</h2>
                </div> -->
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

      <style>
        input[type="checkbox"] {
          width: 30px;
          height: 30px;
          border-radius: 50%;
          background-color: #eee;
          border: 1px solid green;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          outline: none;
          cursor: pointer;
        }

        input[type="checkbox"]:checked {
          background-color: #31EA00;
        }
      </style>

      <div class="container-fluid py-5">
        <form method="post" action="field_map.php" class="container">
          <div class="row g-5">

            <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <h6 class="text-primary text-uppercase">Quick Survey</h6>
                <h1 class="display-5">What Crops Do you want to plant?</h1>
              </div>
              <p class="mb-4">Short information to why they are selecting crops in the first place</p>
            </div>
            <!-- Crops loop -->
            <?php
            $crops = $conn->query("select * from crop");
            while ($crop = $crops->fetch_assoc()) {
            ?>
              <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light text-center p-5">
                  <input type="checkbox" name="crops[]" value="<?php echo $crop['id'] ?>">
                  <h4><?php echo $crop['name'] ?></h4>
                  <p class="mb-0"><?php echo $crop['description'] ?></p>
                </div>
              </div>
            <?php } ?>
            <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <h6 class="text-primary text-uppercase">Where is your land?</h6>
              </div>
              <button type="submit" class="btn btn-primary py-md-3 px-md-5">proceed</a>
            </div>
          </div>
        </form>
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


  <!-- <script>
    var brandPrimary = "#33b35a";
    var PIECHART = document.getElementById("pieChart");
    var myPieChart = new Chart(PIECHART, {
      type: "doughnut",
      data: {
        labels: ["First", "Second", "Third"],
        datasets: [{
          data: [300, 50, 100],
          borderWidth: [1, 1, 1],
          backgroundColor: [brandPrimary, "rgba(75,192,192,1)", "#FFCE56"],
          hoverBackgroundColor: [brandPrimary, "rgba(75,192,192,1)", "#FFCE56"],
        }, ],
      },
    });
  </script> -->
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
      // setInterval(nextCard, 3000);

      $(".green-card").hide();
    });
  </script>

</body>

</html>