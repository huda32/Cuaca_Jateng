<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        #wrapper {
            min-height : 540px;
        } 
    </style>
</head>
<body>
<section id="wrapper">
<section id="jawa" class="about">
<div class="container mt-5">
    <div class="row p-b-30">
                    <div class="col-md-12">
                            <div class="heading text-center">
                                <h2>Prakiraan Cuaca Jawa Tengah Hari Esok</h2>
                            </div>
                    </div>
            </div>
            <div class="row mb-4 justify-content-center mx-auto">
                
                    <div class="col-md-12  col-xs-12 mx-auto">
                        <div class="span12">
                            <?php
                                $no = 1;
                                foreach($data as $a): 
                                    
                            ?>
                                <form action="" method="post">
                                <input type="hidden" name="but" id="but"value="<?= $a['nm_kab'] ?>">
                                <?php if($no%2!=0):?>
                                
                                <button type="submit"class="btn btn-primary btn-md mt-2 mr-2 float-left" style="width:205px"><?= $a['nm_kab']; ?></button>
                                <?php else : ?>
                                <button type="submit"class="btn btn-success btn-md mt-2 mr-2 float-left" style="width:205px"><?= $a['nm_kab']; ?></button>
                        
                                <?php endif; ?>
                                </form>
                            <?php 
                                $no++;
                                
                                endforeach; 
                            ?>
                        </div>
                        
                        
                    </div>

                </section>

                <section>
                    <div class="container ">
                        <div class="row mb-5">
                            <?php if($this->input->post('but')):?>
                                <?php foreach($bot as $b): ?>
                            <img src="<?= base_url();?>image/img_besok/<?= $b['nm_file']; ?>"  height="100%" width="100%">
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                </section>
</section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>