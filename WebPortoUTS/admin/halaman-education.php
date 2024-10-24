<?php include("inc_header.php") ?>

<?php

$op   = isset($_GET['op']) ? $_GET['op'] : ""; // Memastikan nilai $op diambil dari query string
$sukses     = "";
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1   = "DELETE FROM education WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil hapus data";
    }
}
?>


<main>
    
<h1>Halaman Admin "Education"</h1>

<p>
    <a href="halaman_input_education.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman Baru" >
    </a>
</p>
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>


<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>Judul</th>
            <th>Nama Sekolah 1</th>
            <th>Nama Sekolah 2</th>
            <th>Nama Sekolah 3</th>
            <th>Nama Sekolah 4</th>
            <th>deskripsi 1</th>
            <th>deskripsi 2</th>
            <th>deskripsi 3</th>
            <th>deskripsi 4</th>
            <th class="col-1">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql1   = "SELECT * FROM education ORDER BY id DESC";
        $q1     = mysqli_query($koneksi, $sql1);
        $total  = mysqli_num_rows($q1);
        $mulai  = 0;
        $nomor  = $mulai + 1;
       
        while ($r1 = mysqli_fetch_array($q1)) {
        ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $r1['judul'] ?></td>
                <td><?php echo $r1['nama_sekolah1'] ?></td>
                <td><?php echo $r1['nama_sekolah2'] ?></td>
                <td><?php echo $r1['nama_sekolah3'] ?></td>
                <td><?php echo $r1['nama_sekolah4'] ?></td>
                <td><?php echo $r1['deskripsi1'] ?></td>
                <td><?php echo $r1['deskripsi2'] ?></td>
                <td><?php echo $r1['deskripsi3'] ?></td>
                <td><?php echo $r1['deskripsi4'] ?></td>
                
                <td>
                    <a href="halaman_input_education.php?id=<?php echo $r1['id']?>">
                        <span class="badge bg-warning text-dark">Edit</span>
                    </a>

                    <a href="halaman-education.php?op=delete&id=<?php echo $r1['id'] ?>" onclick="return confirm('Apakah yakin mau hapus data?')">
                        <span class="badge bg-danger">Delete</span>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

</main>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
