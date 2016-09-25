<section class="content-header">
    <h1>Kenaikan Dan Kelulusan Siswa</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">Kenaikan & Kelulusan</li>
    </ol>
</section><!--section conten header-->
<!--main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Data Siswa</h3>
                </div>
                <form class="form-horizontal" method="post" action="././simpan.php?ip=update_kelas">
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            	<th>Checkbox</th>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Jenis Kelasmin</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $kelas = $_POST['kelas'];
                            $sqlsiswa = "";
                            if ($kelas=="semua") {
                                $sqlsiswa = "select no,nis,nama,jk,kelas from siswa";
                            }
                            else{
                                $sqlsiswa = "select no,nis,nama,jk,kelas from siswa where kelas = '".$kelas."'";
                            }
                            $resultsiswa = $conn->query($sqlsiswa);
                            if ($resultsiswa->num_rows>0) {
                                while ($row = $resultsiswa->fetch_assoc()) {
                                    ?>
                                    <tr>
                                    	<td><input type="checkbox" checked value="<?php echo $row['nis'];?>" name="naik[]"></td>
                                        <td><?php echo $row['no'];?></td>
                                        <td><?php echo $row['nis'];?></td>
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['jk'];?></td>
                                        <td><?php echo $row['kelas'];?></td>
                                    </tr><?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div><!--box body-->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Naik Ke </label>
                      <div class="col-sm-4">
                        <select class="form-control" name="kelas">
                            <option value="LULUS">LULUS</option>
                          <?php
                          $sql = "select nama_kelas from kelas";
                          $hasil = $conn->query($sql);
                          if ($hasil->num_rows>0) {
                            while ($row = $hasil->fetch_assoc()) {
                              ?>
                              <option value="<?php echo $row['nama_kelas'];?>"><?php echo $row['nama_kelas'];?></option>
                              <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary col-md-3">Simpan</button>
                    </div>
                        </div><!--col-xs-6-->
                    </div><!--row-->
                </div><!-- /.box-footer -->
            </form>
            </div>
        </div>
    </div><!--row-->
</section><!--main content-->
