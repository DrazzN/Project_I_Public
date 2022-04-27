<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<head>
<?php require_once('../inc/header.php'); ?>
</head>

<body class="hold-transition login-page">
    <section class="login mb-5 p-5 text-center bg-light bg-image" style="
      background-image: url('img/lg-back.webp');
      background-size: cover;
      height: 800px;
    ">

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Admin Login</h1>
                    <p class="col-lg-10 fs-4">Sign in to start your session</p>
                </div>

                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="john">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <!--<div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>-->
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                        <hr class="my-4">
                        <small class="text-muted">
                            <div class="col-8">
                                <a href="http://localhost/Project_I_Public/portal.php">Go Back</a>
                            </div>
                        </small>
                    </form>
                </div>
            </div>
        </div>

        </div>

    </section>
    <?php require_once('../inc/script.php'); ?>
</body>

</html>