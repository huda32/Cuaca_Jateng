

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-table fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?= $jumlahKab ?></p>
                    <p class="announcement-text">Jumlah Data Kabupaten</p>
                  </div>
                </div>
              </div>
              <a href="<?= base_url();?>admin/kabupaten">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Data Kabupaten
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?= $jumlahFile ?></p>
                    <p class="announcement-text">Jumlah Data Cuaca Hari Ini</p>
                  </div>
                </div>
              </div>
              <a href="<?= base_url();?>admin/file">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Data Cuaca Hari Ini
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-cloud fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?= $jumlahFileEsok ?></p>
                    <p class="announcement-text">Jumlah Data Cuaca Esok Hari</p>
                  </div>
                </div>
              </div>
              <a href="<?= base_url();?>admin/file_besok">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    Data Cuaca Esok Hari
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-calendar fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?= $jumlahDini ?></p>
                    <p class="announcement-text">
                      Jumlah Data Windrose Chart Services for Airport<br>
                      Post Terakhir : <?php foreach($tgl as $gl){
                        echo $gl['tanggal'];
                      } ?>
                    </p>
                  </div>
                </div>
              </div>
              <a href="<?= base_url();?>admin/dini">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Data Windrose Chart Services for Airport 
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-info fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?= $jumlahGrafis ?></p>
                    <p class="announcement-text">Jumlah Buletin Stamet Ahmad Yani Semarang</p>
                  </div>
                </div>
              </div>
              <a href="<?= base_url();?>admin/infografis">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Buletin Stamet Ahmad Yani Semarang
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- /.row -->

        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->


    

  </body>
</html>
