<!DOCTYPE html>
<html lang="en" class="h-100">
<?php require_once('inc/header.php'); ?>

<body>
    
<?php require_once('inc/topBarNav.php'); ?>
    <div class="container py-4">
        <div class="row row-cols-md-3 align-items-center py-1 bg-dark">
            <a href="http://localhost/Project_I_Public/admin/login.php" class="">
                <div class="mx-auto col">
                    <div class="card shadow">
                        <div class="card-body">
                            <h1 class="card-title">Admin</h1>
                            <img class="img logo" src="http://localhost/Project_I_Public/img/ico/people-sharp.svg" alt="">
                            <p class="card-text">
                                <small><i>Signin to Admin pannel.</i></small>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://localhost/Project_I_Public/faculty/login.php" class="">
                <div class="mx-auto col">
                    <div class="card shadow">
                        <div class="card-body">
                            <h1 class="card-title">Faculty</h1>
                            <img class="img logo" src="http://localhost/Project_I_Public/img/ico/user-tie-solid.svg" alt="">
                            <p class="card-text">
                                <small><i>Signin to Faculty Side.</i></small>
                        </div>
                    </div>
                </div>
            </a>
            <a href="http://localhost/Project_I_Public/student/login.php" class="">
                <div class="mx-auto col">
                    <div class="card shadow">
                        <div class="card-body">
                            <h1 class="card-title">Student</h1>
                            <img class="img logo" src="http://localhost/Project_I_Public/img/ico/people-circle-sharp.svg" alt="">
                            <p class="card-text">
                                <small><i>Signin or Register.</i></small>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <?php require_once('inc/footer.php'); ?>
</body>

</html>