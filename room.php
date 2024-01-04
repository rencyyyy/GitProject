<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - Hotel Renpauco</title>
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
<h2 class="mt-5 p-t-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">

    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f1">Facility one</label>
                </div>
                <div class="mb-2">
                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f2">Facility two</label>
                </div>
                <div class="mb-2">
                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f3">Facility three</label>
                </div>
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label">Adults</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </nav>
    </div>
    
    <div class="col-lg-9 col-md-12 px-4">
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/StandardRoom.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Standard Room</h5>
              <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Single Bed
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Sofa
                      </span>
              </div>
              <div class="facilities mb-3">
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
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Adult
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  0 Children
                </span>
                
              </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₱2,999.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/DeluxeRoom.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Deluxe Room</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Children
                </span>
                
              </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₱3,599.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/SuiteRoom.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Suite Room</h5>
              <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Double Bed
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Dining Area
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Sofa
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Jacuzzi
                      </span>
              </div>
              <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Smart Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Heater
                    </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Children
                </span>
                
              </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₱3,999.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <!--nextroom-->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/FamilyRoom.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Family Room</h5>
              <div class="features mb-3">
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
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Dining Area
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Balcony
                      </span>
              </div>
              <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Smart Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Room Heater
                    </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                </span>
                
              </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₱3,599.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <!--nextroom-->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/ConnectingRoom.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Connecting Room</h5>
              <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Double Bed
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Kitchenette
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Sofa
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Dining Area
                      </span>
              </div>
              <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                         2 Smart Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Room Heater
                    </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                </span>
                
              </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₱4,999.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <!--nextroom-->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/BusinessClassRoom.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Business Room</h5>
              <div class="features mb-3">
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
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Dining Area
                      </span>
              </div>
              <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Smart Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                         2 Printer
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
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Children
                </span>
                
              </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₱5,999.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <!--nextroom-->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/HoneymoonSuite.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Honeymoon Suite</h5>
              <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Canopy Bed
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Sofa
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Dining Area
                      </span>
              </div>
              <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Room Heater
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Telephone
                    </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  0 Children
                </span>
              </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₱6,969.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <!--nextroom-->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-mb-0 mb-3">
          <img src="webimages/rooms/PenthouseRoom.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Penthouse</h5>
              <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          4 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          3 Twin Bed
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 King Bed
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          3 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          3 Sofa
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          2 Dining Area
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Balcony
                      </span>
              </div>
              <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Air conditioner
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Room Heater
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                       2  Telephone
                    </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  6 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  6 Children
                </span>
              </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₱6,999.00/night</h6>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark  book-now-btn shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm w-100 text-black btn-outline-dark book-now-btn shadow-none">Show more</a>
          </div>
          </div>
      </div>
      <!--nextroom-->
      
    </div>

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