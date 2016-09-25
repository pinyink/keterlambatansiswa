<section class="content-header">
    <h1>Data Kelas</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kelas</a></li>
        <li class="active">Data Kelas</li>
    </ol>
</section><!--section conten header-->
<!--main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Lihat Data Kelas</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Kode Kelas</th>
                                <th>Kelas</th>
                                <?php
                                if ($_SESSION['b_level']=='admin') {?>
                                <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqlkelas = "select kode_kelas,nama_kelas from kelas order by kode_kelas";
                            $resultkelas = $conn->query($sqlkelas);
                            if ($resultkelas->num_rows>0) {
                                while ($row = $resultkelas->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['kode_kelas'];?></td>
                                        <td><?php echo $row['nama_kelas'];?></td>
                                        <?php
                                        if ($_SESSION['b_level']=='admin') {?>
                                        <td><a href="././hapus.php?k=hapus_kelas&id=<?php echo $row['kode_kelas']?>" class="btn btn-danger">Hapus</a></td>
                                        <?php } ?>
                                    </tr><?php
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
