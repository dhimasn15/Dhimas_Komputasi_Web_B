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
    <link rel="stylesheet" href="css/style.css">
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
      .project-card {
        transition: transform 0.3s ease;
      }

      .project-card:hover {
        transform: scale(1.05);
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

    <!-- Timeline Section -->
    <h1 class="text-center mt-6" style="margin-top: -5rem;margin-bottom: 7rem; position: relative; "><?php echo judul4('1') ?></h1>
<div class="timeline" style="margin-top: -5rem;margin-bottom: 7rem; position: relative; ">
    <div class="time-con left-container">
        <div class="text-box">
            <h2><?php echo sekolah1('1') ?></h2>
            <p><?php echo des1('1') ?>  </p>
            <span class="left-container-arrow"></span>
        </div>
    </div>
    
    <div class="time-con right-container">
        <div class="text-box">
            <h2><?php echo sekolah2('1') ?></h2>
             
            <?php echo des2('1') ?>
            <span class="right-container-arrow"></span>
        </div>
    </div>

    <div class="time-con left-container">
        <div class="text-box">
            <h2><?php echo sekolah3('1') ?></h2>
            <?php echo des3('1') ?>
            <span class="left-container-arrow"></span>
        </div>
    </div>

    <div class="time-con right-container">
        <div class="text-box">
            <h2><?php echo sekolah4('1') ?></h2>
            <?php echo des4('1') ?>
            <span class="right-container-arrow"></span>
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
