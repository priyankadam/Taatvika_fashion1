<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Beseen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .login-register {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
            width: 100%;
            padding: 10% 0;
            position: fixed; 
        }
    </style>
</head>
<body>
    <section>
        <div class="login-register" style="background-image:url(<?php echo base_url('/assets/images/shopping.jpg'); ?>);">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url('/admin/loginsubmit')?>" method="post">
                                <center><img src="<?php echo base_url('/assets/images/logo/png logo-01.png'); ?>" style="width: 50%;"></center>
                                <h3 class="box-title m-b-20 text-center">Admin Login</h3>

                                <?php if (isset($_SESSION['success'])) : ?>
                                    <div class="alert alert-success my-5">
                                        <h5><?=$_SESSION['success'];?></h5>
                                    </div>
                                <?php endif; ?>

                                <?php if (isset($error['username'])) : ?>
                                    <span class="text-danger"><?= $error['username'] ;?></span>
                                <?php endif; ?>
                                <?php if (isset($error['password'])) : ?>
                                    <span class="text-danger"><?= $error['password']; ?></span>
                                <?php endif; ?>
                                
                                <div class="form-outline mt-4 mb-4">
                                    <input type="text" class="form-control" name="username" id="" placeholder="Username">
                                    <label class="d-none" for="">Username</label>

                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" class="form-control" name="password" id="" placeholder="Password">
                                    <label class="d-none" for="">Password</label>

                                </div>

                                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light w-100" type="" name="login">Log In</button>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>