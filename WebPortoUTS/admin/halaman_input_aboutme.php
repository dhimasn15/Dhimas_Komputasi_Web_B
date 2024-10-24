<?php include("inc_header.php") ?>

<?php
$id         = "";
$judul       = "";
$teks1       = "";
$teks2       = "";
$teks3       = "";
$error      = "";
$sukses     = "";

// Mengecek apakah ada data yang dikirimkan dari form
if (isset($_POST['simpan'])) {
    $judul      = $_POST['judul'];
    $teks1       = $_POST['teks1'];
    $teks2    = $_POST['teks2'];
    $teks3   = $_POST['teks3'];

    // Mendapatkan ID jika ada
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = "";
    }

    // Debug: tampilkan ID
    echo "ID yang digunakan: " . htmlspecialchars($id) . "<br>";

    // Validasi data
    if ($judul == '' || $teks1 == '') {
        $error = "Silakan masukkan semua data yakni adalah data isi dan judul.";
    }

    // Jika tidak ada error, lakukan insert atau update
    if (empty($error)) {
      if ($id != "") {
          // Query UPDATE jika id tidak kosong
          $sql1 = "UPDATE aboutme SET judul = '$judul', teks1 = '$teks1', teks2 = '$teks2', teks3 = '$teks3' WHERE id = '$id'";
      } else {
          // Query INSERT jika id kosong (data baru)
          $sql1 = "INSERT INTO aboutme (judul, teks1, teks2, teks3) VALUES ('$judul', '$teks1', '$teks2', '$teks3')";
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
    $sql1   = "SELECT * FROM aboutme WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);

    if ($r1) {
      $judul      = $_POST['judul'];
      $teks1       = $_POST['teks1'];
      $teks2    = $_POST['teks2'];
      $teks3   = $_POST['teks3'];
    } else {
        $error = "Data tidak ditemukan";
    }
}
?>

<h1>Halaman Admin Input about</h1>
<div class="mb-3 row">
    <a href="halaman-about.php"><< Kembali ke halaman admin about</a>
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
            <input type="text" class="form-control" id="nama" value="<?php echo htmlspecialchars($judul) ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="bio" class="col-sm-2 col-form-label">Teks 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="bio" value="<?php echo htmlspecialchars($teks1) ?>" name="teks1">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Teks 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="button" value="<?php echo htmlspecialchars($teks2) ?>" name="teks2">
        </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Teks 3</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="button" value="<?php echo htmlspecialchars($teks3) ?>" name="teks3">
        </div>
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
