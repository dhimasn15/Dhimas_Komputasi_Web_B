
<?php
include_once("admin/koneksi.php");
include_once("admin/inc_fungsi.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact</title>
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

    <div class="container" style="margin-top: 100px;">
        <h1 class="text-center mb-5">Contact Me</h1>

        <div class="row">
            <div class="col-md-6">
                <h4>Get in Touch</h4>
                <form>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7056067657113!2d106.71171811115178!3d-6.302358161654828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69faad36ceb84d%3A0xd4048155e0b83a6b!2sGg.%20Nurul%20Iman%2C%20Jombang%2C%20Kec.%20Ciputat%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015414!5e0!3m2!1sid!2sid!4v1729738315332!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> <a href="mailto:dhimas.nurhidayat@student.upj.ac.id" target="_blank">dhimas.nurhidayat@student.upj.ac.id</a></li>
                    <li><strong>Phone:</strong> <a href="tel:+6289516107824"target="_blank">+62 895 1610 7824</a></li>
                    <li><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/dhimas-nurhidayat-4964a528a/" target="_blank">linkedin.com/in/dhimasnurhidayat</a></li>
                </ul>
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
