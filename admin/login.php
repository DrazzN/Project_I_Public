<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<?php
require_once('../inc/header.php');
?>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>