<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- own css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/blogStyle.css'); ?>">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/244c1245b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Big+Shoulders+Display">

    <title>Blog | Portofolio Web</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                <div class="navbar-nav text-end">
                    <li class="nav-item dropdown justify-content-end">
                        <a class="active" data-spy="scroll" style="padding-right: 30px" href="<?php echo site_url('Home/Blog'); ?>">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-spy="scroll" style="padding-right: 30px" href="<?php echo site_url('Home/Works'); ?>">Works</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-spy="scroll" style="padding-right: 30px" href="contact.html">Contact</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <!-- blog -->
    <section class="blog">
        <div class="container">
            <h1 class="mb-5">Blog</h1>
            <div class="row">
                <h2>UI Interactions of the week</h2>
                <div class="d-flex mt-4">
                    <p>12 Feb 2019</p>
                    <p class="ms-3 me-3">|</p>
                    <p class="keterangan">Express, Handlebars</p>
                </div>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                <hr class="my-3">
            </div>
            <div class="row">
                <h2>UI Interactions of the week</h2>
                <div class="d-flex mt-4">
                    <p>12 Feb 2019</p>
                    <p class="ms-3 me-3">|</p>
                    <p class="keterangan">Express, Handlebars</p>
                </div>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                <hr class="my-3">
            </div>
            <div class="row">
                <h2>UI Interactions of the week</h2>
                <div class="d-flex mt-4">
                    <p>12 Feb 2019</p>
                    <p class="ms-3 me-3">|</p>
                    <p class="keterangan">Express, Handlebars</p>
                </div>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                <hr class="my-3">
            </div>
            <div class="row">
                <h2>UI Interactions of the week</h2>
                <div class="d-flex mt-4">
                    <p>12 Feb 2019</p>
                    <p class="ms-3 me-3">|</p>
                    <p class="keterangan">Express, Handlebars</p>
                </div>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                <hr class="my-3">
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="container mt-5 py-5 text-center">
        <div class="d-flex justify-content-center">
            <a href="#"><img src="<?php echo site_url('assets/img/fb.png'); ?>" alt="facebook" class="img-fluid"></a>
            <a href="#"><img src="<?php echo site_url('assets/img/insta.png'); ?>" alt="instagram" class="img-fluid"></a>
            <a href="#"><img src="<?php echo site_url('assets/img/twitter.png'); ?>" alt="twitter" class="img-fluid"></a>
            <a href="#"><img src="<?php echo site_url('assets/img/Linkedin.png'); ?>" alt="Linkedin" class="img-fluid"></a>
        </div>
        <p class="my-4">Copyright ©2020 All rights reserved </p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>