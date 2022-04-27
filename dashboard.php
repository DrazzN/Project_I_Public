<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('inc/header.php'); ?>
</head>


<body>
    <?php require_once('inc/topBarNav.php'); ?>
    <section class="bg-dark text-light p-5 text-center text-sm-start">

        <div class="container">
            <div class="d-sm-flex py-5 align-items-center justify-content-between">
                <div>
                    <h1>Start Learning<span class="d-sm-flex text-warning">What You Find Interesting</span></h1>
                    <p class="lead my-4">
                        Expand your opportunities withcouirses of your own choice. We
                        provide the tools and skills to teach what you love.
                    </p>
                    <button class="btn btn-primary btn-lg"><a href="#signup-banner">Start The Enrollment</a></button>
                </div>
                <img class="img-fluid w-50 d-none d-md-block" src="img/flowers.webp" alt="" />
            </div>
        </div>
    </section>
    <div class="b-example-divider"></div>

    <section class="bg text-center bg-light bg-image">

        <div class="container col-xl-10 col-xxl-8 px-4 py-5" id="signup-banner">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Sign up </h1>
                    <p class="col-lg-10 fs-4">Login Below.</p>
                </div>

                <div class="col-md-10 mx-auto col-lg-5">

                </div>
            </div>
        </div>
    </section>
    <section class="text-center bg-dark">
        <?php require_once('inc/carousel.php'); ?>
    </section>
    <?php require_once('inc/footer.php'); ?>
    <?php require_once('inc/script.php'); ?>
</body>

</html>