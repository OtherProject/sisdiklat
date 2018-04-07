<?php include 'header.php';?>

  <body class="skin-blue">
    <div class="wrapper">
      
      <?php include 'menu.php'; ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Detail Review</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="">Data Peserta</li><li class="active">Detail Review</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Peserta</h3>
                </div>
                <div class="box-body">
                  <input class="form-control" type="text" placeholder="NIP" readonly="" value="13032087349">
                  <br/>
                  <input class="form-control" type="text" placeholder="Nama" readonly value="Albert Einstein">
                  <br/>
                  <input class="form-control" type="text" placeholder="Unit Kerja" readonly value="DKI Jakarta">
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Soal</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Soal</label>
                      <textarea class="form-control" rows="3" disabled="">Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</textarea>
                    </div>
                    <div class="form-group">
                      <label>Jawaban Peserta</label>
                      <textarea class="form-control" rows="3" disabled="">Sudah dilakukan dengan maksimal</textarea>
                    </div>
                    <div class="form-group">
                      <label>Kunci</label>
                      <textarea class="form-control" rows="3" disabled="">Kunci jawaban untuk soal ini</textarea>
                    </div>
                  </div><!-- /.box-body -->

                  
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              

              <!-- Input addon -->
            

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Review</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Review</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Wawancara</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Nilai</label>
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ..."/>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label" for="inputError"><i class=""></i> Keterangan</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Lulus
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" />
                          Tidak Lulus
                        </label>
                      </div>
                    </div>

                    <!-- select -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include 'footer.php';?>
    </div><!-- ./wrapper -->

<?php include 'script.php';?>