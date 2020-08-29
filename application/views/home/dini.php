<section>
    <div class="container">
    <?php foreach ($dini as $d): ?>
        <div class="row text-center mt-5">
            <div class="col">
                <h1><?= $d['judul'] ?></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="text-center">
                    <img src="<?= base_url();?>image/img_dini/<?= $d['gambar']; ?>" height="50%" width="50%">
                </div>
                <h4 class="text-center">Keterangan</h4>
                <p><?= $d['tempat']?>, <?= $d['tanggal']?></p>
                <p style="word-wrap:break-word"><?= $d['ket'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</section>