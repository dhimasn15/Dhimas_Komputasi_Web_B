<?php
include_once("admin/koneksi.php");
include_once("admin/inc_fungsi.php");
?>

<!doctype html>
<html lang="en">
<head>
<style>
/* Navbar Brand Styling */

.navbar-brand:hover {
  color: #fff; /* Change color on hover */
}

/* Navbar Links Styling */
.navbar-nav .nav-link {
  color: black;
  font-size: 1.1rem;
  transition: color 0.3s ease, background-color 0.3s ease;
}

.navbar-nav .nav-link:hover {
  color: #4caf50; /* Change color on hover */
  background-color: rgba(0, 0, 0, 0.05); /* Optional hover background */
  border-radius: 5px;
}

/* Navbar background on scroll */
.navbar.scrolled {
  background-color: rgba(0, 0, 0, 0.8) !important; /* Change navbar background color */
  transition: background-color 0.3s ease;
}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <title>Bootstrap Example</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include("inc/navbar.php") ?>

  <div class="spotlight"></div>
  <div class="spotlight-blur"></div>

  <!-- jumbotron -->
  <div class="jumbotron">
    <img src="img/dhimas.JPG" alt="Dhimas" width="200" class="rounded-circle img-thumbnail text-center">
    <h1 class="nama display-4 text-center mt-3"><?php echo ambil_nama('2') ?></h1>
    <p class="bio lead text-center"><?php echo ambil_bio('2')?> </p>

    <!-- Button Jelajahi Saya -->
    <div class="text-center mt-4">
      <a href="" class="btn-jelajahi mt-4" role="button"><?php echo ambil_button('2')?> </a>
    </div>

    <div class="aset">
      <img src="img/rocket.png" width="200px">
    </div>
    <div class="aset2">
      <img src="img/aset.png" width="200px">
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,192L36.9,160L73.8,160L110.8,32L147.7,320L184.6,256L221.5,64L258.5,320L295.4,96L332.3,96L369.2,224L406.2,64L443.1,160L480,64L516.9,192L553.8,96L590.8,256L627.7,224L664.6,256L701.5,288L738.5,160L775.4,160L812.3,64L849.2,320L886.2,32L923.1,96L960,320L996.9,288L1033.8,160L1070.8,256L1107.7,64L1144.6,224L1181.5,128L1218.5,96L1255.4,256L1292.3,192L1329.2,320L1366.2,32L1403.1,64L1440,288L1440,320L1403.1,320L1366.2,320L1329.2,320L1292.3,320L1255.4,320L1218.5,320L1181.5,320L1144.6,320L1107.7,320L1070.8,320L1033.8,320L996.9,320L960,320L923.1,320L886.2,320L849.2,320L812.3,320L775.4,320L738.5,320L701.5,320L664.6,320L627.7,320L590.8,320L553.8,320L516.9,320L480,320L443.1,320L406.2,320L369.2,320L332.3,320L295.4,320L258.5,320L221.5,320L184.6,320L147.7,320L110.8,320L73.8,320L36.9,320L0,320Z"></path>
    </svg>
  </div>

   

  <?php include("inc/footer.php") ?>




  <script>
    // DOM load event
    window.addEventListener("DOMContentLoaded", () => {
      const spotlightBlur = document.querySelector('.spotlight-blur');
      let mouseX = 0; // Current mouse X position
      let mouseY = 0; // Current mouse Y position
      let spotlightX = 0; // Spotlight X position
      let spotlightY = 0; // Spotlight Y position

      // Update spotlight blur position based on mouse movement
      window.addEventListener('mousemove', e => {
        mouseX = e.pageX - 150; // Center the blur on cursor
        mouseY = e.pageY - 150; // Center the blur on cursor
      });

      // Animation loop to update spotlight position with delay
      function updateSpotlight() {
        spotlightX += (mouseX - spotlightX) * 0.1; // Smooth transition
        spotlightY += (mouseY - spotlightY) * 0.1; // Smooth transition
        spotlightBlur.style.left = `${spotlightX}px`;
        spotlightBlur.style.top = `${spotlightY}px`;
        requestAnimationFrame(updateSpotlight); // Call the function again
      }

      updateSpotlight(); // Start the animation loop
    });


    
  </script>
</body>
</html>
