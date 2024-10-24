<?php include("inc_header.php") ?>

<?php

$op   = "";
$sukses     ="";
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1   = "delete from aboutme where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil hapus data";
    }
}
?>


<main>
    
<h1>halaman admin "project"</h1>

<p>
    <a href="halaman_input_project.php">
        <input type="button" class="btn btn-primary" value="buat halaman baru" >
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
            <th>judul</th>
            <th>projek 1</th>
            <th>projek 2</th>
            <th>projek 3</th>
            <th class="col-1">aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $sql1   = "select * from project order by id desc";
     
        $q1     = mysqli_query($koneksi,$sql1);
        $total  = mysqli_num_rows($q1);
        $mulai  = 0;
        $nomor  = $mulai + 1;
       
        $q1     = mysqli_query($koneksi, $sql1);
      
        while ($r1 = mysqli_fetch_array($q1)) {
        ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $r1['judul'] ?></td>
                <td><?php echo $r1['projek1'] ?></td>
                <td><?php echo $r1['projek2'] ?></td>
                <td><?php echo $r1['projek3'] ?></td>
                
                <td>
                    <a href="halaman_input_project.php?id=<?php echo $r1['id']?>">
                        <span class="badge bg-warning text-dark">Edit</span>
                    </a>

                    <a href="halaman-about.php?op=delete&id=<?php echo $r1['id'] ?>" onclick="return confirm('Apakah yakin mau hapus data bro?')">
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