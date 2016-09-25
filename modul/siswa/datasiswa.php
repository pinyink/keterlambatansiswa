<section class="content-header">
    <h1>Data Siswa</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">Data siswa</li>
    </ol>
</section><!--section conten header-->
<!--main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Lihat Data Siswa</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Jenis Kelasmin</th>
                                <th>Kelas</th>
                                <?php
                                if ($_SESSION['b_level']=='admin') {?>
                                <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $kelas = $_POST['kelas'];
                            $sqlsiswa = "";
                            if ($kelas=="semua") {
                                $sqlsiswa = "select no,nis,nama,jk,kelas from siswa order by nis asc";
                            }
                            else{
                                $sqlsiswa = "select no,nis,nama,jk,kelas from siswa where kelas = '".$kelas."' order by nis asc";
                            }
                            $resultsiswa = $conn->query($sqlsiswa);
                            if ($resultsiswa->num_rows>0) {
                                while ($row = $resultsiswa->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['no'];?></td>
                                        <td><?php echo $row['nis'];?></td>
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['jk'];?></td>
                                        <td><?php echo $row['kelas'];?></td>
                                        <?php
                                        if ($_SESSION['b_level']=='admin') {?>
                                        <td><a href="././home.php?r=edit_data_siswa&id=<?php echo $row['nis'];?>" class="btn btn-primary">Edit</a></td>
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
