<?php include("inc_header.php") ?>

<?php
$id         = "";
$nama       = "";
$bio        = "";
$button     = "";
$error      = "";
$sukses     = "";

// Mengecek apakah ada data yang dikirimkan dari form
if (isset($_POST['simpan'])) {
    $nama      = $_POST['nama'];
    $bio       = $_POST['bio'];
    $button    = $_POST['button'];

    // Mendapatkan ID jika ada
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = "";
    }

    // Debug: tampilkan ID
    echo "ID yang digunakan: " . htmlspecialchars($id) . "<br>";

    // Validasi data
    if ($nama == '' || $bio == '') {
        $error = "Silakan masukkan semua data yakni adalah data isi dan judul.";
    }

    // Jika tidak ada error, lakukan insert atau update
    if (empty($error)) {
        if ($id != "") {
            // Perbaiki query update
            $sql1   = "UPDATE halaman SET nama = '$nama', bio = '$bio', button = '$button' WHERE id = '$id'";
        } else {
            $sql1   = "INSERT INTO halaman (nama, bio, button) VALUES ('$nama', '$bio', '$button')";
        }

        // Debug: tampilkan query
        echo "Query yang dijalankan: " . htmlspecialchars($sql1) . "<br>";

        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Sukses memasukkan data";
        } else {
            // Debug: tampilkan error query
            $error = "Gagal cuy masukkan data: " . mysqli_error($koneksi);
        }
    }
}

// Cek apakah kita dalam mode edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql1   = "SELECT * FROM halaman WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);

    if ($r1) {
        $nama  = $r1['nama'];
        $bio   = $r1['bio'];
        $button = $r1['button'];
    } else {
        $error = "Data tidak ditemukan";
    }
}
?>

<h1>Halaman Admin Input home</h1>
<div class="mb-3 row">
    <a href="halaman.php"><< Kembali ke halaman admin</a>
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
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" value="<?php echo htmlspecialchars($nama) ?>" name="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="bio" class="col-sm-2 col-form-label">Bio</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="bio" value="<?php echo htmlspecialchars($bio) ?>" name="bio">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Button</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="button" value="<?php echo htmlspecialchars($button) ?>" name="button">
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
