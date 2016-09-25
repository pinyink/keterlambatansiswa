<section class="content-header">
	<h1>Data Siswa Terlambat</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Transaksi</a></li>
		<li class="active">Data Siswa Terlambat</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Laporan Siswa Terlambat</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="././././home.php?r=data_siswa_terlambat">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="tgl1" class="col-sm-2 control-label">Dari</label>
                      <div class="col-sm-4">
                        <input class="form-control" id="tgl1" name="tgl1" placeholder="Tanggal" value="<?php echo date('d/m/Y');?>">
                      </div>
                      <label for="tgl2" class="col-sm-2 control-label">Ke</label>
                      <div class="col-sm-4">
                        <input class="form-control" id="tgl2" name="tgl2" placeholder="Tanggal" value="<?php echo date('d/m/Y');?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="kelas">
                          <option value="semua">Semua</option>
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
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Lihat</button>
                  </div><!-- /.box-footer -->
                </form>
            </div><!-- /.box -->
		</div>
	</div>
</section>