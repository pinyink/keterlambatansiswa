<section class="content-header">
	<h1>Input Siswa Terlambat</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Transaksi</a></li>
		<li class="active">Input Siswa Terlambat</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Siswa Terlambat</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="././simpan.php?ip=input_siswa_telat">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="tgl" class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="tgl" name="tgl" placeholder="Tanggal" value="<?php echo date('d/m/Y');?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nistelat" class="col-sm-2 control-label">NIS/NAMA</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nistelat" name="nistelat" placeholder="NIS">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alasan" class="col-sm-2 control-label">Alasan</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="alasan" name="alasan" placeholder="alasan"></textarea>
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