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
                <!-- <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+012 345 6789</h2>
                </div> -->
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand ms-lg-5">
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