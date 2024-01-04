<div class="container-fluid bg-white mt-5 shadow">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">HOTEL RENPAUCO</h3>
      <p>Discover the beauty of Mariveles and its surrounding attractions from our convenient location. Explore historic sites, immerse yourself in nature, or take to the water for exciting activities. Our friendly staff is always available to assist you in planning your perfect stay.</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-house-door-fill"></i> Home</a> <br>
      <a href="room.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-building-fill"></i> Rooms</a> <br>
      <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-search-heart-fill"></i> Facilities</a> <br>
      <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-telephone-fill"></i> Contact Us</a> <br>
      <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-journals"></i> About Us</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
        <?php 
         if($contact_r['tw']!=''){
          echo<<<data
            <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2"><i class="bi bi-twitter-x me-1"></i> Twitter-X </a> <br>
          data;
         }

        ?>
        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none mb-2"><i class="bi bi-instagram me-1"></i> Instagram </a> <br>
        <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2"><i class="bi bi-facebook me-1"></i> Facebook </a> <br>
        <a href="<?php echo $contact_r['li'] ?>" class="d-inline-block text-dark text-decoration-none mb-2"><i class="bi bi-linkedin me-1"></i> Linked-in </a>

    </div>
  </div>
</div>
 <h6 class="text-center bg-dark text-white p-5 m-0">&copy; copyright @ 2023 by | <span class="fw-bold bg-white text-dark rounded">Hotel Renpauco</span></h6>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script>
    function setActive(){
      let navbar = document.getElementById('nav-bar');
      let a_tags = navbar.getElementsByTagName('a');

      for(i=0; i<a_tags.length; i++){
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name) >= 0){
          a_tags[i].classList.add('active');
        }
      }
    }
    setActive();
 </script>