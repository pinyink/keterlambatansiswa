<section class="content-header">
	<h1>Data Siswa</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Siswa</a></li>
		<li class="active">Data Siswa</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Lihat Data Siswa</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="././home.php?r=data_siswa_kelas">
                  <div class="box-body">
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