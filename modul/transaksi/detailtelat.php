<section class="content-header">
    <h1>Detail Data Siswa Terlambat</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">Detail Laporan Siswa Terlambat</li>
    </ol>
</section><!--section conten header-->
<!--main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Lihat Detail Data Terlambat</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Tanggal</th>
                                <th>Alasan</th>
                                <?php
                                if ($_SESSION['b_level']=='admin'){
                                ?>
                                <th>Aksi</th>
                                <?php
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nis = $conn->real_escape_string($_GET['nis']);
                            $tgl1 = $conn->real_escape_string($_GET['tgl1']);
                            $tgl2 = $conn->real_escape_string($_GET['tgl2']);
                            $sqldetail = "select distinct transaksitelat.nis,transaksitelat.no, siswa.nama,siswa.kelas,transaksitelat.tanggal, transaksitelat.alasan from transaksitelat join siswa on transaksitelat.nis = siswa.nis where transaksitelat.nis ='".$nis."' and transaksitelat.tanggal between '".$tgl1."' and '".$tgl2."' order by transaksitelat.no asc";
                            $resultDetail = $conn->query($sqldetail);
                            if ($resultDetail->num_rows>0) {
                                while ($rowDetail=$resultDetail->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $rowDetail['nis'];?></td>
                                        <td><?php echo $rowDetail['nama'];?></td>
                                        <td><?php echo $rowDetail['kelas'];?></td>
                                        <td><?php
                                        $tgl1 = str_replace('-', '/', $rowDetail['tanggal']);
                                        $date1 = date('d/m/Y', strtotime($tgl1));
                                        echo $date1;
                                        ?></td>
                                        <td><?php echo $rowDetail['alasan'];?></td>
                                        <?php
                                        if ($_SESSION['b_level']=='admin'){
                                        ?>
                                        <td><a href="././hapus.php?k=hapus_detail&id=<?php echo $rowDetail['no'];?>" class="btn btn-danger">Hapus</a></td>
                                        <?php
                                        }
                                        ?>
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
