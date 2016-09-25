<?php
if ($_SESSION['b_level']=='admin') {?>
<section class="content-header">
    <h1>Data Admin</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Data admin</li>
    </ol>
</section><!--section conten header-->
<!--main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Lihat Data Admin</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id Admin</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqlAdmin = "select id_admin,username,level,nama from admin order by id_admin ASC";
                            $resultSqlAdmin = $conn->query($sqlAdmin);
                            if ($resultSqlAdmin->num_rows>0) {
                                while ($row = $resultSqlAdmin->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id_admin'];?></td>
                                        <td><?php echo $row['username'];?></td>
                                        <td><?php echo $row['level'];?></td>
                                        <td><?php echo $row['nama'];?></td>
                                        <td><a href="././hapus.php?k=hapus_admin&id=<?php echo $row['id_admin']?>" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div><!--box body-->
            </div>
        </div>
    </div><!--row-->
</section><!--main content-->
<?php
}
else{
  echo "Anda Tidak Boleh Mengakses Halaman Ini";
}
?>