<?php
include_once("admin/koneksi.php");
include_once("admin/inc_fungsi.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/style.css">
    <style>
        .navbar-brand:hover {
  color: #fff; /* Change color on hover */
}.card {
    width: 80%; 
    margin: 0 30px; /* Beri jarak antara card */
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
.project-card {
    transition: transform 0.3s ease;
}

.project-card:hover {
    transform: scale(1.05); /* Zoom-in pada hover */
}


      .spotlight-blur {
        position:relative;
        height: 300px;
        width: 300px;
        border-radius: 50%;
        filter: blur(80px);
        pointer-events: none;
        background-color: #b9c98f;
        z-index: -1;
        transition: left 0.1s ease, top 0.1s ease;
      }

      footer a {
        text-decoration: none;
      }
    </style>
</head>
<body>
<?php include("inc/navbar.php") ?>

    <div class="spotlight"></div>
  <div class="spotlight-blur"></div>

  <div class="container" style="margin-top: -10rem; position: relative;">
    <h1 class="text-center mb-5"><?php echo judul3('4') ?> </h1>
    
    <div class="row">
        <div class="col-12 col-md-4 mb-4">
            <div class="card project-card shadow-sm" style="justify:center;">
                <img src="img/porto1.png" class="card-img-top"  height="250px" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">Projek 1</h5>
                    <p class="card-text" style="text-align: justify;"><?php echo projek1('4') ?></p>
                    <a href="img/porto1.png" class="btn "  target="_blank" style="background-color: #b9c98f; color: white;">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-4">
            <div class="card project-card shadow-sm">
                <img src="img/porto2.png" class="card-img-top" height="250px" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">Projek 2</h5>
                    <p class="card-text" style="text-align: justify;"><?php echo projek2('4') ?></p>
                    <a href="https://timusss0.github.io/wdc_lomba/" class="btn" style="background-color: #b9c98f; color: white;" target="_blank">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-4">
            <div class="card project-card shadow-sm">
                <img src="img/porto3.png" class="card-img-top" height="250px" alt="Project 3">
                <div class="card-body">
                    <h5 class="card-title">Projek 3</h5>
                    <p class="card-text" style="text-align: justify;"><?php echo projek3('4') ?></p>
                    <a href="img/porto3.png" class="btn "target="_blank" style="background-color: #b9c98f; color: white;">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>


    
    <?php include("inc/footer.php") ?>

    <script>
      window.addEventListener("DOMContentLoaded", () => {
        const spotlightBlur = document.querySelector('.spotlight-blur');
        let mouseX = 0;
        let mouseY = 0;
        let spotlightX = 0;
        let spotlightY = 0;

        window.addEventListener('mousemove', e => {
          mouseX = e.pageX - 150;
          mouseY = e.pageY - 150;
        });

        function updateSpotlight() {
          spotlightX += (mouseX - spotlightX) * 0.1;
          spotlightY += (mouseY - spotlightY) * 0.1;
          spotlightBlur.style.left = `${spotlightX}px`;
          spotlightBlur.style.top = `${spotlightY}px`;
          requestAnimationFrame(updateSpotlight);
        }

        updateSpotlight();
      });
    </script>
</body>
</html>
