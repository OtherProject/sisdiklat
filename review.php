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
            <small>Daftar Peserta</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Daftar Peserta</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Peserta Ujian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Soal</th>
                        <th>Jawaban</th>
                        <th>Review</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</td>
                        <td>Sudah dilakukan dengan maksimal</td>
                        <td>Mungkin seharusnya dibarengi dengan sanksi bagi bawahan yang tidak mau menaati</td>
                        <td>Lulus</td>
                        <td><a href="review-detail.php" class="btn btn-warning">Review Ulang</a></td>
                      </tr>
                      <tr>
                        <td>Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</td>
                        <td>Sudah dilakukan dengan maksimal</td>
                        <td></td>
                        <td></td>
                        <td><a href="review-detail.php" class="btn btn-success">Review</a></td>
                      </tr>
                      <tr>
                        <td>Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</td>
                        <td>Sudah dilakukan dengan maksimal</td>
                        <td></td>
                        <td></td>
                        <td><a href="review-detail.php" class="btn btn-success">Review</a></td>
                      </tr>
                      <tr>
                        <td>Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</td>
                        <td>Sudah dilakukan dengan maksimal</td>
                        <td></td>
                        <td></td>
                        <td><a href="review-detail.php" class="btn btn-success">Review</a></td>
                      </tr>
                      <tr>
                        <td>Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</td>
                        <td>Sudah dilakukan dengan maksimal</td>
                        <td></td>
                        <td></td>
                        <td><a href="review-detail.php" class="btn btn-success">Review</a></td>
                      </tr>
                      <tr>
                        <td>Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</td>
                        <td>Sudah dilakukan dengan maksimal</td>
                        <td></td>
                        <td></td>
                        <td><a href="review-detail.php" class="btn btn-success">Review</a></td>
                      </tr>
                      <tr>
                        <td>Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor</td>
                        <td>Sudah dilakukan dengan maksimal</td>
                        <td></td>
                        <td></td>
                        <td><a href="review-detail.php" class="btn btn-success">Review</a></td>
                      </tr>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            </div><!-- /.col -->

            <div class="col-md-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Rekapitulasi Hasil Review</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    
                    <!-- textarea -->
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Total Nilai</label>
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
            </div>
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include 'footer.php';?>
    </div><!-- ./wrapper -->

<?php include 'script.php';?>