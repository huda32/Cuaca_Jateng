<style>
    section {
        min-height: 420px;
    }

    .jumbotron {
        background-image: url("<?= base_url();?>image/background.jpg");
        min-height: 740px;

        height: 100%; 
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0px 55px;
    }
</style>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center text-light mt-5">
        <img src="<?= base_url();?>image/logo.png" style="width: 25%" class="rounded-circle mb-3">
        <h1><strong>BMKG</strong></h1><br/>
        <h1><strong>STASIUN METEOROLOGI KELAS II AHMAD YANI SEMARANG</strong></h1>
        <p class="lead">Selamat datang di official website Stasiun Meteorologi Ahmad Yani Semarang. Stasiun pelayanan informasi cuaca untuk Wilayah Jawa Tengah dan Daerah Istimewa Yogyakarta, serta pelayanan penerbangan di bandara Ahmad Yani Semarang.</p>
    </div>
</div>

<section id="infografis">
<div class="container">
    <div class="row text-center">
        <div class="col mb-3">
            <h2>Infografis</h2>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
    
        <div class="carousel-inner">
            <?php 
                $hasAddedActive = false;
            ?>
            <?php foreach($grafis as $i): ?>
            <?php 
                $divClass = 'carousel-item';
                $divClass .= $hasAddedActive ? '' : ' active';
                $hasAddedActive = true;
                echo('<div class="'.$divClass.'">'); 
            ?>
                <img src="<?= base_url(); ?>image/img_grafis/<?= $i['gambar']; ?>" height="550px"  class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.5)">
                    <h3 style="color: black"><?= $i['judul']; ?></h3>
                </div>
            <?php echo('</div>'); ?>   
            <?php endforeach; ?>
            <!-- <div class="carousel-item active">
                <img class="d-block w-100" src="image/jateng.jpg" alt="First slide" height="550px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/resist.jpg" alt="Second slide" height="550px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/JUARA.jpg" alt="Third slide" height="550px">
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</section>

<section id="jawa">
<div class="container mb-5 pt-5">
    <div class="row text-center">
        <div class="col">
            <h2>Prakiraan Cuaca Kecamatan di Jawa Tengah</h2>
        </div>
    </div>
    <div class="row text-center justify-content-center">
        <div class="col-md-5 mt-3">
            <img  src="image/sekarang.png" width="50%">
                <h3>Prakiraan Cuaca Jateng Hari Ini</h3>
                    <a class="btn btn-primary" href="<?= base_url(); ?>cuaca">Selengkapnya-></a>  
        
        </div>
        <div class="col-md-5 mt-3">
            <img  src="image/esok.png" width="50%">
                <h3>Prakiraan Cuaca Jateng Hari Esok</h3>
                <a class="btn btn-primary" href="<?= base_url(); ?>cuaca/esok">Selengkapnya-></a>  
        </div>
		<div class="col-md-5 mt-3">
            <img  src="image/esok.png" width="50%">
                <h3>Windrose Chart Services for Airport</h3>
                <a class="btn btn-primary" href="<?= base_url(); ?>windrose">Selengkapnya-></a>  
        </div>
</div>
</section>



<div class="container" id="apk">
    <div class="row  text-center justify-content-center">
        <div class="col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
            <h5><span class="badge badge-info">New</span> Informasi Perkiraan Cuaca Jawa Tengah juga tersedia dalam versi Android</h5>
            <h5><a href="http://cuacajateng.com/prakiraan/download/cuacajateng.apk" class="btn btn-outline-primary text-decoration-none">Download Disini</a></h5>
        </div>
    </div>
</div>


<!-- <section id="radar" class="about">
<div class="container mb-5 pb-5 pt-5">
    <div class="row text-center">
        <div class="col">
            <h2>Radar Satelit Cuaca</h2>
        </div>
    </div>
    <div class="row text-center justify-content-center">
        <div class="col-md-5 mt-3  pb-5">
        <img  src="http://202.90.198.22/IMAGE/HIMA/H08_EH_Jateng.png" width="50%" height="70%">
            <h3>Perkiraan Cuaca Hari Ini</h3>
                <a class="btn btn-primary" href="http://www.cuacajateng.com/akun/home/satelit">Selengkapnya-></a>  
        </div>
        <div class="col-md-5 mt-3 pb-3">
            <img  src="http://dataweb.bmkg.go.id/MEWS/Radar/Citra_Radar_Indonesia.png"  width="50%" height="70%">
            <h3>Perkiraan Cuaca Esok Hari</h3>
            <a class="btn btn-primary" href="http://dataweb.bmkg.go.id/MEWS/Radar/Citra_Radar_Indonesia.png">Selengkapnya-></a>  
        </div>
    </div>
</div>
</section> -->
