<?php
if ($_SESSION['b_level']=='admin') {?>
<section class="content-header">
	<h1>Edit Data Siswa</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Siswa</a></li>
		<li class="active">Edit Siswa</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<!-- Horizontal Form -->
      <?php
      $id=$_GET['id'];
      $sqledit = "select no,nis,nama,jk,kelas from siswa where nis = '".$id."'";
      $hasiledit = $conn->query($sqledit);
      $show = $hasiledit->fetch_assoc();
      ?>
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Siswa</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="././simpan.php?ip=edit_siswa">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="no" class="col-sm-2 control-label">No</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="no" name="no" placeholder="No" value="<?php echo $show['no'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nis" class="col-sm-2 control-label">NIS</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="nis" value="<?php echo $show['nis'];?>" name="nis" placeholder="NIS" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $show['nama'];?>" placeholder="Nama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="jk">
                          <?php
                          if ($show['jk']=='L') {
                            ?>
                            <option value="N">---</option>
                            <option value="L" selected>Laki-laki</option>
                            <option value="P">Perempuan</option>
                          <?php
                          }
                          elseif ($show['jk']=='P') {
                            ?>
                            <option value="N">---</option>
                            <option value="L">Laki-laki</option>
                            <option value="P" selected>Perempuan</option>
                          <?php
                          }
                          else{
                            ?>
                            <option value="N" selected>---</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                          <?php
                          }
                          ?>
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
                          ?>
                          <?php
                          if ($hasil->num_rows>0) {
                            while ($row = $hasil->fetch_assoc()) {
                              if ($row['nama_kelas']==$show['kelas']) {
                              ?>
                                <option value="<?php echo $show['kelas'];?>" selected><?php echo $show['kelas'];?></option>
                              <?php
                              }
                              else{
                                ?>
                                <option value="<?php echo $row['nama_kelas'];?>"><?php echo $row['nama_kelas'];?></option>
                                <?php
                              }
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="././hapus.php?k=hapus_siswa&id=<?php echo $show['nis'];?>" class="btn btn-danger">Hapus</a>
                    <button type="submit" class="btn btn-info pull-right">Simpan</button>
                  </div><!-- /.box-footer -->
                </form>
            </div><!-- /.box -->
		</div>
	</div>
</section>
<?php } ?>