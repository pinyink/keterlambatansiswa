<?php
if ($_SESSION['b_level']=='admin') {?>
<section class="content-header">
	<h1>Tambah Admin</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Admin</a></li>
		<li class="active">Tambah Admin</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Admin Baru</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="././simpan.php?ip=input_admin">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="username" class="form-control" id="username" name="username" placeholder="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="level" class="col-sm-2 control-label">Level</label>
                      <div class="col-sm-10">
                        <select id="level" class="form-control" name="level">
                          <option value="N">---</option>
                          <option value="admin">Admin</option>
                          <option value="operator">Operator</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="nama" class="form-control" id="nama" name="nama" placeholder="nama">
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
else{
  echo "Anda Tidak Boleh Mengakses Halaman Ini";
}
?>