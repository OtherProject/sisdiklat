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
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Unit Kerja</th>
                        <th>Tanggal Ujian</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>13032087349</td>
                        <td>Albert Einstein</td>
                        <td>DKI Jakarta</td>
                        <td>05 April 2018</td>
                        <td><a href="review.php" class="btn btn-info">Review</a></td>
                      </tr>
                      <tr>
                        <td>13032087349</td>
                        <td>Ade Saputra</td>
                        <td>Kalimantan</td>
                        <td>05 April 2018</td>
                        <td><a href="review.php" class="btn btn-info">Review</a></td>
                      </tr>
                      <tr>
                        <td>13032087349</td>
                        <td>Muhamad Hasan</td>
                        <td>Yogyakarta</td>
                        <td>05 April 2018</td>
                        <td><a href="review.php" class="btn btn-info">Review</a></td>
                      </tr>
                      <tr>
                        <td>13032087349</td>
                        <td>Iqbal Mukhti</td>
                        <td>Solo</td>
                        <td>05 April 2018</td>
                        <td><a href="review.php" class="btn btn-info">Review</a></td>
                      </tr>
                      <tr>
                        <td>13032087349</td>
                        <td>Dian Ayu Sundari</td>
                        <td>Bandung</td>
                        <td>05 April 2018</td>
                        <td><a href="review.php" class="btn btn-info">Review</a></td>
                      </tr>
                      <tr>
                        <td>13032087349</td>
                        <td>Albertus Bayu Pratomo</td>
                        <td>DKI Jakarta</td>
                        <td>05 April 2018</td>
                        <td><a href="review.php" class="btn btn-info">Review</a></td>
                      </tr>
                      <tr>
                        <td>13032087349</td>
                        <td>Supriadi</td>
                        <td>Papua</td>
                        <td>05 April 2018</td>
                        <td><a href="review.php" class="btn btn-info">Review</a></td>
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
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include 'footer.php';?>
    </div><!-- ./wrapper -->

<?php include 'script.php';?>