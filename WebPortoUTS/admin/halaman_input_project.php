<?php include("inc_header.php") ?>

<?php
$id         = "";
$judul       = "";
$projek1      = "";
$projek2      = "";
$projek3      = "";
$error      = "";
$sukses     = "";

// Mengecek apakah ada data yang dikirimkan dari form
if (isset($_POST['simpan'])) {
    $judul      = $_POST['judul'];
    $projek1       = $_POST['projek1'];
    $projek2    = $_POST['projek2'];
    $projek3    = $_POST['projek3'];
    

    // Mendapatkan ID jika ada
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = "";
    }

    // Debug: tampilkan ID
    echo "ID yang digunakan: " . htmlspecialchars($id) . "<br>";

   

    // Jika tidak ada error, lakukan insert atau update
    if (empty($error)) {
      if ($id != "") {
          // Query UPDATE jika id tidak kosong
          $sql1 = "UPDATE project SET judul = '$judul', judulproject = '$projek1', projek1 = '$projek2', projek3 = '$projek3' WHERE id = '$id'";
      } else {
          // Query INSERT jika id kosong (data baru)
          $sql1 = "INSERT INTO project (judul, projek1, projek2, projek3) VALUES ('$judul', '$projek1', '$projek2', '$projek3')";
      }
  
      // Debug: tampilkan query
      echo "Query yang dijalankan: " . htmlspecialchars($sql1) . "<br>";
  
      $q1 = mysqli_query($koneksi, $sql1);
      if ($q1) {
          $sukses = "Sukses memasukkan data";
      } else {
          // Debug: tampilkan error query
          $error = "Gagal memasukkan data: " . mysqli_error($koneksi);
      }
  }
  
}

// Cek apakah kita dalam mode edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql1   = "SELECT * FROM project WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);

    if ($r1) {
      $judul      = $_POST['judul'];
      $projek1      = "";
      $projek2       = "";
      $projek3       = "";
    } else {
        $error = "Data tidak ditemukan";
    }
}
?>

<h1>Halaman Admin Input "project"</h1>
<div class="mb-3 row">
    <a href="halaman-project.php"><< Kembali ke halaman admin "project"</a>
</div>

<?php if ($error) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php } ?>

<?php if ($sukses) { ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php } ?>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo htmlspecialchars($judul) ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="bio" class="col-sm-2 col-form-label">projek 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="projek1" value="<?php echo htmlspecialchars($projek1) ?>" name="projek1">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">projek 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="projek2" value="<?php echo htmlspecialchars($projek2) ?>" name="projek2">
        </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">projek 3</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="projek3" value="<?php echo htmlspecialchars($projek3) ?>" name="projek3">
        </div>

    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
    </div>
</form>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
