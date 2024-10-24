
<?php
include("admin/koneksi.php");
?>
<nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" 
    style="background-color: rgba(193, 193, 193, 0.2); 
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: background-color 0.3s ease;">


    <div class="container">
      <a class="navbar-brand" style="color: rgb(0, 0, 0); font-weight: bold;
  font-size: 1.5rem;
  color: rgb(0, 0, 0);
  transition: color 0.3s ease;" href="#">Dhimas Nurhidayat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link text-black" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="aboutme.php" targe>Tentang Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="project.php">Projek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="education.php">Pendidikan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="contact.php">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>