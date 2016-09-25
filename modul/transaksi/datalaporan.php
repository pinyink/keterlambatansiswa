<section class="content-header">
    <h1>Data Siswa Telat</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">Laporan Siswa Terlambat</li>
    </ol>
</section><!--section conten header-->
<!--main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Data Siswa Terlambat Dari 
                    <?php
                    $var1 = $_POST['tgl1'];
                    $var2 = $_POST['tgl2'];
                    $kelas = $_POST['kelas'];
                    $tgl1 = str_replace('/', '-', $var1);
                    $date1 = date('Y-m-d', strtotime($tgl1));
                    $tgl2 = str_replace('/', '-', $var2);
                    $date2 = date('Y-m-d', strtotime($tgl2));
                    echo $var1." Sampai ".$var2;
                    ?>
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jumlah Terlambat</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            $sqlsiswatelat = "";
                            $ab = 1;
                            if ($kelas=="semua") {
                                $sqlsiswatelat = "select distinct transaksitelat.nis, siswa.nama,siswa.kelas from transaksitelat join siswa on transaksitelat.nis = siswa.nis where transaksitelat.tanggal between '".$date1."' and '".$date2."' order by transaksitelat.nis asc";
                            }
                            else{
                                $sqlsiswatelat = "select distinct transaksitelat.nis, siswa.nama,siswa.kelas from transaksitelat join siswa on transaksitelat.nis = siswa.nis where siswa.kelas = '".$kelas."' and transaksitelat.tanggal between '".$date1."' and '".$date2."' order by transaksitelat.nis asc";
                            }
                            $resultsiswatelat = $conn->query($sqlsiswatelat);
                            if ($resultsiswatelat->num_rows>0) {
                                while ($row = $resultsiswatelat->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $ab;?></td>
                                        <td><?php echo $row['nis'];?></td>
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['kelas'];?></td>
                                        <td>
                                            <?php
                                            $resultcount = $conn->query("select count(nis) as total from transaksitelat where nis = '".$row['nis']."' and tanggal between '".$date1."' and '".$date2."'");
                                            $totalcount = $resultcount->fetch_assoc();
                                            echo $totalcount['total'];
                                            ?>
                                        </td>
                                        <td><a href="././home.php?r=detail_siswa_terlambat&nis=<?php echo $row['nis'];?>&tgl1=<?php echo $date1;?>&tgl2=<?php echo $date2;?>" class="btn btn-primary">Detail</a></td>
                                    </tr><?php $ab++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div><!--box body-->
                <div class="box-footer">
                    <?php
                    if ($_SESSION['b_level']=='admin') {?>
                    <a href="././export.php?e=export_transaksi&date1=<?php echo $date1;?>&date2=<?php echo $date2;?>&kelas=<?php echo $kelas;?>" target="_blank" class="btn btn-success">Eksport Excell</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div><!--row-->
</section><!--main content-->
