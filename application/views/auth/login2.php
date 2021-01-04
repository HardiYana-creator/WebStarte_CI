<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 02:52:07 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login Page</title>
    <!--favicon-->
    <link rel="icon" href="<?=base_url()?>assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="<?=base_url()?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?=base_url()?>assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/app.css" />
</head>

<body class="bg-login">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                 <form action="<?= base_url()?>Auth/login" id="loginForm" novalidate method="post">
                                <div class="card-body p-md-5">
                                    <div class="text-center">
                                        <img src="<?=base_url()?>assets/images/logo-icon.png" width="80" alt="">
                                        <h3 class="mt-4 font-weight-bold">LOGIN PAGE</h3>
                                        <div id="infoMessage"><?php echo $message;?></div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="identity"placeholder="Enter your Username" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" />
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                                <label class="custom-control-label" for="customSwitch1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mt-3 w-100">
                                        <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                        <button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
                                        </button>
                                    </div>
                                    <hr>
                                </div>
                            </form>
                            </div>
                            <div class="col-lg-6">
                                <img src="<?=base_url()?>assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 02:52:07 GMT -->
</html>