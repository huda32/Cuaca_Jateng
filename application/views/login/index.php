<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title><?= $judul ?></title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <script src="<?= base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url();?>assets/js/jquery-1.10.2.js"></script>
    <script>
        $(function(){
              $(".alert").delay(2000).slideUp(200, function() {
                $(".alert").alert('close');
            });
          });
    </script>
    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>

    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->
</head>

<body class="text-center bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php if ($this->session->flashdata('login')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?= $this->session->flashdata('login'); ?></strong>
                        </div>
                    <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <img class="mb-2" src="<?= base_url();?>image/logo.png" width="72" height="72">
                        <h1>STASIUN METEOROLOGI KELAS II AHMAD YANI</h1>
                    </div>
                    
                    <div class="card-body">
                        <form class="form-signin" action="<?= base_url();?>login/proses" method="post">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            <button class="btn btn-lg btn-primary btn-block mt-5" type="submit">Sign in</button>
                            <p class="mt-5 mb-3 text-muted">&copy; BMKG Ahmad Yani</p>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>





