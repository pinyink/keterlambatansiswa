<?php
if ($_SESSION['b_level']=='admin') {?>
<section class="content-header">
	<h1>Tambah Data Siswa Baru</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Siswa</a></li>
		<li class="active">Input Siswa</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Siswa Baru</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="././simpan.php?ip=input_siswa">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="no" class="col-sm-2 control-label">No</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="no" name="no" placeholder="No">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nis" class="col-sm-2 control-label">NIS</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="nis" name="nis" placeholder="NIS">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="jk">
                          <option value="N">---</option>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="kelas">
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
                    <button type="submit" class="btn btn-info pull-right">Input</button>
                  </div><!-- /.box-footer -->
                </form>
            </div><!-- /.box -->
		</div>
	</div>
</section>
<?php 
}
?>