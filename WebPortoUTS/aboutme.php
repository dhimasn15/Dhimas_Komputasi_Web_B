<?php
include_once("admin/koneksi.php");
include_once("admin/inc_fungsi.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>About Me</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <style>
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
      .spotlight-blur {
    position:relative;
    height: 300px; /* Size of the spotlight */
    width: 300px;
    border-radius: 50%; /* Make it circular */
    filter: blur(80px); /* Stronger blur effect */
    pointer-events: none;
    background-color: #b9c98f; /* Set single color (light pink) */
    z-index: -1;
    transition: left 0.1s ease, top 0.1s ease; /* Smooth transition for position */
}

footer a{
    text-decoration: none;
}

    </style>
</head>
<body>
<?php include("inc/navbar.php") ?>

    <div class="spotlight"></div>
  <div class="spotlight-blur"></div>

    <div class="container " style="margin-top: -10rem;margin-bottom: 8rem; position: relative; " >
        <div class="row align-items-center pt-10">
            <div class="col-md-4 text-center">
                <div class="position-relative">
                    <img src="img/aboutmePP.png" alt="Dhimas Nurhidayat" class="img-fluid rounded-circle mb-3">
                    <svg class="position-absolute z-n1" viewBox="0 0 200 200" style="top: 0; left: 0; width: 100%; height: auto;">
                        <path fill="#B9C98F" d="M51.2,-66.3C60.2,-53.4,57.2,-31.5,56.9,-13C56.7,5.5,59.1,20.5,55.3,36.3C51.4,52.1,41.2,68.7,26,76.5C10.7,84.4,-9.7,83.4,-23.3,74.1C-36.9,64.8,-43.8,47,-54.1,30.6C-64.4,14.1,-78.1,-1,-77.6,-15.4C-77.1,-29.8,-62.5,-43.4,-47.2,-55.2C-31.9,-66.9,-15.9,-76.9,2.6,-79.9C21.1,-83,42.2,-79.2,51.2,-66.3Z" transform="translate(100 100)" />
                    </svg>
                </div>
            </div>

            <div class="col-md-8">
                <h2><?php echo ambil_judul('2') ?></h2>
                <p><?php echo ambil_teks1('2') ?> </p>
                <p><?php echo ambil_teks2('2') ?> </p>
                <p><?php echo ambil_teks3('2') ?> </p>
            </div>
        </div>
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
          spotlightBlur.style.left = ${spotlightX}px;
          spotlightBlur.style.top = ${spotlightY}px;
          requestAnimationFrame(updateSpotlight); // Call the function again
        }
  
        updateSpotlight(); // Start the animation loop
      });
    </script>
</body>
</html>