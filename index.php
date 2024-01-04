<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Hotel Renpauco</title>
    <link rel="icon" href="webimages/favicon/RenpaucoLogo.png">
    <link rel="stylesheet" href="css/webstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body class="bg-light">
<?php require('inc/header.php')?>

<!--CAROUSEL -->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <?php 
        $res = selectAll('carousel');
        while($row = mysqli_fetch_assoc($res)){
          $path = CAROUSEL_IMG_PATH;
          echo <<<data
              <div class="swiper-slide">
                <img src="$path$row[image]" class="w-100 d-block"/>
              </div>
          data;
        }
      ?>
    </div>
  </div>
</div>

<!-- AVAILABILITY FORM -->

<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                            </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                    <option value="1">0</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                            </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn btn-sm btn-outline-dark shadow-none">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- OUR ROOMS -->
<h2 class="mt-5 p-t-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="webimages/rooms/StandardRoom.png" class="card-img-top" alt="Standard Room">
                <div class="card-body">
                  <h5>Standard Room</h5>
                  <h6 class="mb-4">₱2,999.00/night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Room
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Single bed
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Sofa
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Room Heater
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Telephone
                    </span>
                  </div>
                  <div class="ratings mb-4">
                    <h6 class="mb-1">Ratings</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>    
                  </div>
                  </div>   
                </div>
        </div>
        <!---->
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="webimages/rooms/DeluxeRoom.png" class="card-img-top" alt="Standard Room">
                <div class="card-body">
                  <h5>Deluxe Room</h5>
                  <h6 class="mb-4">₱3,599.00/night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Room
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Twin Bed
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Sofa
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Room Heater
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Telephone
                    </span>
                  </div>
                  <div class="ratings mb-4">
                    <h6 class="mb-1">Ratings</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>    
                  </div>
                  </div>   
                </div>
        </div>
        <!---->
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="webimages/rooms/FamilyRoom.png" class="card-img-top" alt="Standard Room">
                <div class="card-body">
                  <h5>Family Room</h5>
                  <h6 class="mb-4">₱4,499.00 per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Room
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        4 Double Bed
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Kitchenette
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Sofa
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Jacuzzi
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Room Heater
                    </span>
                  </div>
                  <div class="ratings mb-4">
                    <h6 class="mb-1">Ratings</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>    
                  </div>
                  </div>   
                </div>
        </div>
        <!---->
        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="webimages/rooms/BusinessClassRoom.png" class="card-img-top" alt="Standard Room">
              <div class="card-body">
                <h5>Business Class Room</h5>
                <h6 class="mb-4">₱5,999.00 per night</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      3 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Queen Bed
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Meeting room
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Sofa 1 Desk 2 Chairs
                  </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Smart TV
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Air conditioner
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Room Heater
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Telephone
                  </span>
                </div>
                <div class="ratings mb-4">
                  <h6 class="mb-1">Ratings</h6>
                  <span class="badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Book now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>    
                </div>
                </div>   
              </div>
      </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="room.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
</div>

<!-- OUR FACILITIES-->
<h2 class="mt-5 p-t-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="webimages/icons/laundry.png" width="100px" alt="Swimming icon">
            <h5 class="mt-3">Laundry room</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="webimages/icons/swimming.png" width="169px" alt="Swimming icon">
            <h5 class="mt-3">Swimming pool</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="webimages/icons/foodndrinks.png" width="120px" alt="Swimming icon">
            <h5 class="mt-3">Restaurant</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="webimages/icons/parking.png" width="100px" alt="Swimming icon">
            <h5 class="mt-3">Parking lot</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="webimages/icons/fitness.png" width="100px" alt="Swimming icon">
            <h5 class="mt-3">Fitness gym</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
        </div>
    </div>
</div>

<!--TESTIMONIALS-->
<h2 class="mt-5 p-t-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">

          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="webimages/testimonialimages/Rency.jpg" width="30px">
              <h6 class="m-0 ms-2">Rency C. Delos Santos</h6>
            </div>
            <p>
              Renpauco was a great place to stay for business. Quiet, comfortable rooms, efficient staff, and a convenient location make it ideal for work travelers.
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!---->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="webimages/testimonialimages/JustineB.jpg" width="30px">
              <h6 class="m-0 ms-2">Justine Basibas</h6>
            </div>
            <p>
              Hotel Renpauco was a charming and unique stay with stylish, modern rooms and attentive staff. The quiet neighborhood provides a peaceful retreat.
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
            </div>
          </div>
          <!---->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="webimages/testimonialimages/Jimver.jpg" width="30px">
              <h6 class="m-0 ms-2">Jimver Pol Dimaano</h6>
            </div>
            <p>
              An excellent choice for a families. Spacious rooms, friendly staff, and kid-friendly amenities make it a fun and relaxing vacation spot.
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!---->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="webimages/testimonialimages/Charls.jpg" width="30px">
              <h6 class="m-0 ms-2">Charls Pakingking</h6>
            </div>
            <p>
              A luxurious experience with exceptional staff, spacious rooms, and top-notch amenities. The pool and spa were particularly enjoyable. 
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
          <!---->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="webimages/testimonialimages/Tims.jpg" width="30px">
              <h6 class="m-0 ms-2">Al Timothy Villaruel</h6>
            </div>
            <p>
              Clean rooms, friendly staff, and limited amenities. Environmental friendly!
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
            </div>
          </div>
          <!---->

        </div>
      <div class="swiper-pagination"></div>
  </div>
</div>

<!--REACH US-->

<h2 class="mt-5 p-t-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="420" src="<?php echo $contact_r['iframe'] ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4 ">
        <h5>Contact us</h5>
        <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
        </a>
        <br>
        <?php
          if($contact_r['pn2']!=''){
            echo<<<data
              <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
              </a>
            data;
          }
        
        ?>
        
        <br>
        <a href="mailto:<?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark">
        <i class="bi bi-envelope-paper-heart-fill"></i> <?php echo $contact_r['email']?>
        </a>
      </div>
      <!---->
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <?php 
          if($contact_r['tw']!=''){
            echo<<<data
              <a href="$contact_r[tw]" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-twitter-x me-1"></i> Twitter-X
                </span>
              </a>
              <br>
            data;
          }
        
        ?>
        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i> Instagram
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['li'] ?>" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-linkedin me-1"></i> Linkedin
          </span>
        </a>
      </div>
      <!---->
    </div>
  </div>
</div>

<!--FOOTER-->
<?php require('inc/footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>