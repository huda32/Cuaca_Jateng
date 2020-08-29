<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Tabel <small>Infografis</small></h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url();?>admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><i class="fa fa-edit"></i> Buletin Stamet Ahmad Yani Semarang</li>
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
    </div>

    <p>
        <button type="button" class="btn btn-primary tampilTambahGrafis" data-toggle="modal" data-target="#ModalGrafis">Posting</button>
    </p>

    <div id="ModalGrafis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="judulFormGrafis">
        <div class="modal-dialog" role="document">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="judulFormGrafis">Form Post Buletin Stamet Ahmad Yani Semarang</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body badan">
            <form action="<?= base_url();?>admin/tambah_grafis/" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" id="id">
                    <label>Masukan Judul</label>
                    <input type="text" class="form-control" name="jdl" id="jdl" required >
                    <label>Masukan Gambar</label>
                    <p class="text-danger">*Ukuran file maks. 2 MB</p>
                    <input type="file" name="gbr" id="gbr">
                </div>
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

    <table class="table table-responsive table-bordered table-condensed table-hover table-striped" id="myTable">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul</th>
            <th scope="col">Gambar</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Operasi</th>
        </tr>
        </thead>
        <tbody>
        <?php $n = 1; foreach($file as $a) : ?>
        <tr>
            <th><?= $n++; ?></th>
            <td><?= $a['judul']; ?></td>
            <td>
            <img src="<?= base_url(); ?>image/img_grafis/<?= $a['gambar']; ?>" height="100px" weight="150px">
            </td>
            <td><?= $a['tanggal']; ?></td>
            <td>
            <a href="#" data-toggle="modal" data-target="#ModalGrafis" class="btn btn-success UbahInfo" data-id="<?= $a['id']; ?>">Ubah</a>
            <a href="<?= base_url();?>admin/hapus_grafis/<?= $a['id'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus item ini?');">Hapus</a>
            </td>
        <?php endforeach; ?>
        </tr>
        </tbody>
    </table>

</div>

<script src="<?= base_url();?>assets/js/script.js"></script>

</body>
</html>