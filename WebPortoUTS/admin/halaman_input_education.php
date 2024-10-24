<?php include("inc_header.php") ?>

<?php
$id         = "";
$judul      = "";
$nama_sekolah1  = "";
$nama_sekolah2  = "";
$nama_sekolah3  = "";
$nama_sekolah4  = "";
$deskripsi1     = "";
$deskripsi2     = "";
$deskripsi3     = "";
$deskripsi4     = "";

$error      = "";
$sukses     = "";

// Mengecek apakah ada data yang dikirimkan dari form
if (isset($_POST['simpan'])) {
    $judul          = $_POST['judul'];
    $nama_sekolah1  = $_POST['nama_sekolah1'];
    $nama_sekolah2  = $_POST['nama_sekolah2'];
    $nama_sekolah3  = $_POST['nama_sekolah3'];
    $nama_sekolah4  = $_POST['nama_sekolah4'];
    $deskripsi1     = $_POST['deskripsi1'];
    $deskripsi2     = $_POST['deskripsi2'];
    $deskripsi3     = $_POST['deskripsi3'];
    $deskripsi4     = $_POST['deskripsi4'];
    
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
            $sql1 = "UPDATE education SET judul = '$judul', nama_sekolah1 = '$nama_sekolah1', nama_sekolah2 = '$nama_sekolah2', nama_sekolah3 = '$nama_sekolah3', nama_sekolah4='$nama_sekolah4', deskripsi1='$deskripsi1', deskripsi2='$deskripsi2', deskripsi3='$deskripsi3', deskripsi4='$deskripsi4' WHERE id = '$id'";
        } else {
            // Query INSERT jika id kosong (data baru)
            $sql1 = "INSERT INTO education (judul, nama_sekolah1, nama_sekolah2, nama_sekolah3, nama_sekolah4, deskripsi1, deskripsi2, deskripsi3, deskripsi4) VALUES ('$judul', '$nama_sekolah1', '$nama_sekolah2', '$nama_sekolah3', '$nama_sekolah4', '$deskripsi1', '$deskripsi2', '$deskripsi3', '$deskripsi4')";
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
    $sql1 = "SELECT * FROM education WHERE id = '$id'";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);

    if ($r1) {
        $judul          = $r1['judul'];
        $nama_sekolah1  = $r1['nama_sekolah1'];
        $nama_sekolah2  = $r1['nama_sekolah2'];
        $nama_sekolah3  = $r1['nama_sekolah3'];
        $nama_sekolah4  = $r1['nama_sekolah4'];
        $deskripsi1     = $r1['deskripsi1'];
        $deskripsi2     = $r1['deskripsi2'];
        $deskripsi3     = $r1['deskripsi3'];
        $deskripsi4     = $r1['deskripsi4'];
    } else {
        $error = "Data tidak ditemukan";
    }
}
?>

<h1>Halaman Admin Input "Education"</h1>
<div class="mb-3 row">
    <a href="halaman-education.php"><< Kembali ke halaman admin "Education"</a>
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
        <label for="bio" class="col-sm-2 col-form-label">Nama Sekolah 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_sekolah1" value="<?php echo htmlspecialchars($nama_sekolah1) ?>" name="nama_sekolah1">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Nama Sekolah 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_sekolah2" value="<?php echo htmlspecialchars($nama_sekolah2) ?>" name="nama_sekolah2">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Nama Sekolah 3</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_sekolah3" value="<?php echo htmlspecialchars($nama_sekolah3) ?>" name="nama_sekolah3">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Nama Sekolah 4</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_sekolah4" value="<?php echo htmlspecialchars($nama_sekolah4) ?>" name="nama_sekolah4">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Deskripsi 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi1" value="<?php echo htmlspecialchars($deskripsi1) ?>" name="deskripsi1">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Deskripsi 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi2" value="<?php echo htmlspecialchars($deskripsi2) ?>" name="deskripsi2">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Deskripsi 3</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi3" value="<?php echo htmlspecialchars($deskripsi3) ?>" name="deskripsi3">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="button" class="col-sm-2 col-form-label">Deskripsi 4</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi4" value="<?php echo htmlspecialchars($deskripsi4) ?>" name="deskripsi4">
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
