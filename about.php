<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Hotel Renpauco</title>
    <link rel="icon" href="webimages/favicon/RenpaucoLogo.png">
    <link rel="stylesheet" href="css/webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
<!--header-->
<?php require('inc/header.php')?>
    <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">ABOUT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">Hotel Renpauco is a family-owned establishment, built with love and a passion for creating unforgettable experiences.<br> We believe in the power of hospitality to connect people with each other and with the beauty of the surrounding world.<br> Our team is dedicated to providing exceptional service, ensuring that your stay with us is truly special.</p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Owner</h3>
                <p>Rency Delos Santos isn't just the owner of Hotel Renpauco; he's the visionary who brought it to life. Driven by a deep love for Porac and a passion for hospitality, Rency poured her heart and soul into creating a haven where guests can connect with the region's beauty and warmth. Under her leadership, Hotel Renpauco has become a premier destination, known for its exceptional service, comfortable accommodations, and commitment to showcasing the magic of Porac.</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="webimages/aboutimg/Rency.jpg" class="w-100">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="webimages/aboutimg/hotel.png" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="webimages/aboutimg/guests.png" width="70px">
                    <h4 class="mt-3">200+ GUEST</h4>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="webimages/aboutimg/reviews.png" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="webimages/aboutimg/staffs.png" width="70px">
                    <h4 class="mt-3">50+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>
<!--MANAGEMENT TEAM -->
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        <div class="swiper m-team">
            <div class="swiper-wrapper mb-5">
                <?php 
                    $about_r = selectAll('team_details');
                    $path=ABOUT_IMG_PATH;

                    while($row = mysqli_fetch_assoc($about_r)){
                        echo<<<data
                            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                                <img src="$path$row[picture]" class="w-100">
                                <h5 class="mt-2">$row[name]</h5>
                            </div>
                        data;
                    }
                ?>
               </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
 
  
<!-- footer -->
<?php require('inc/footer.php')?>

<!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>