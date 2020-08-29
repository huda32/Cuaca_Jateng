

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Tabel <small>Nama Kabupaten</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?= base_url();?>admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Nama Kabupaten</li>
            </ol>
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?= validation_errors(); ?> 
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('flash')) : ?>
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Data <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
              </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('kabu')) : ?>
              <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Data <strong><?= $this->session->flashdata('kabu'); ?></strong> 
              </div>
            <?php endif; ?>
          </div>
        </div><!-- /.row -->
        <p>
          <button type="button" class="btn btn-primary tampilTambah" data-toggle="modal" data-target="#myModal">Tambah</button>
        </p>

        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="judulForm">
          <div class="modal-dialog" role="document">
            <!-- konten modal-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="judulForm">Form Tambah Data Kabupaten</h4>
              </div>
              <!-- body modal -->
              <div class="modal-body badan">
                  <form action="<?= base_url();?>admin/tambahkab/" method="post">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <label>Nama Kabupaten</label>
                      <input class="form-control" name="kabu" id="kabu" type="text" required >
                    </div>
                    
                    <button type="reset" class="btn btn-warning">Reset</button> 
                  </fieldset>
              </div>
              <!-- footer modal -->
              <div class="modal-footer kaki">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end modal 1-->
        
        <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="myTable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Kabupaten</th>
                    <th>Operasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach($data as $kab) :
                  ?>
                  <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $kab['nm_kab']?></td>
                    <td>
                      <a href="#" class="btn btn-success tampilUbah"data-toggle="modal" data-target="#myModal" data-id="<?= $kab['id']; ?>" >Ubah</a>
                      <a href="<?= base_url();?>/admin/hapuskab/<?= $kab['id'] ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                    </td>
                  </tr>
                  <?php 
                    
                    endforeach;
                  ?>
                </tbody>
              </table>
        <div class="row">
          <div class="col-lg-6">
            
          </div>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    
  </body>
</html>