<?php
if ($_SESSION['b_level']=='admin') {?>
<section class="content-header">
    <h1>Import Siswa</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">Import Siswa</li>
    </ol>
</section><!--section conten header-->
<!--main content-->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Import Data Siswa Baru</h3>
                </div>
                <div class="box-body">
                    <!-- form start -->
                	<form class="form-horizontal" enctype="multipart/form-data" method="post" role="form" action="././simpan.php?ip=import_siswa">
                  		<div class="box-body">
                   			<div class="form-group">
                      			<label for="file">Pilih Hanya csv File. <a href="././contoh.csv">Contoh</a></label>
                      			<div class="col-sm-10">
                        			<input type="file" name="file" id="file" size="150">
                      			</div>
                    		</div>
                </div><!--box body-->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Import</button>
                </div><!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div><!--row-->
</section><!--main content-->
<?php } ?>