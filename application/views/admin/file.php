
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Tabel <small>File Kabupaten Terkini</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?= base_url();?>admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> File Kabupaten Terkini</li>
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
            <?php if ($this->session->flashdata('fla')) : ?>
              <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Data <strong><?= $this->session->flashdata('fla'); ?></strong> 
              </div>
            <?php endif; ?>
          </div>
        </div><!-- /.row -->
        <p>
          <button type="button" class="btn btn-primary tampilTambahFile" data-toggle="modal" data-target="#myModal">Tambah</button>
        </p>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="judulFormFile">
          <div class="modal-dialog" role="document">
            <!-- konten modal-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="judulFormFile">Form Tambah File Kabupaten</h4>
              </div>
              <!-- body modal -->
              <div class="modal-body bod">
                  <form action="<?= base_url();?>admin/tambah/" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label>Pilih Kabupaten</label>
                        <select class="form-control" id="kabt" name="kabt"> 
                        <?php foreach ($data as $l) : ?>
                          <option value="<?= $l['nm_kab']; ?>">
                            <?= $l['nm_kab']; ?>
                          </option>
                        <?php endforeach; ?>
                        </select>
                        <!-- <?php $data = set_value('fil');if($data): ?>
                          <h1>OK</h1>
                        <?php endif;?> -->
                        <label>Masukan File </label>
                        <p class="text-danger">*Ukuran file maks. 2 MB</p>
                        <input type="file" name="fil" id="fil">
                      </div>
            
                    </div>
              <!-- footer modal -->
              <div class="modal-footer fot">
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
              <th scope="col">No.</th>
              <th scope="col">Nama Kabupaten</th>
              <th scope="col">File</th>
              <th scope="col">Operasi</th>
            </tr>
          </thead>
          <tbody>
          <?php $n = 1; foreach($file as $a) : ?>
            <tr>
              <th><?= $n++; ?></th>
              <td><?= $a['nm_kab']; ?></td>
              <td>
                <img src="<?= base_url(); ?>image/img_terkini/<?= $a['nm_file']; ?>" height="100px" weight="150px">
              </td>
              <td>
                <a href="#" data-toggle="modal" data-target="#myModal"class="btn btn-success tampilUbahFile" data-id="<?= $a['id']; ?>">Ubah</a>
                <a href="<?= base_url();?>/admin/hapus/<?= $a['id'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus item ini?');">Hapus</a>
              </td>
            <?php endforeach; ?>
            </tr>
          </tbody>
        </table>
        

        <div class="row">
          <div class="col-lg-6">
            
          </div>
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

          
  </body>
</html>