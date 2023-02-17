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

    <!-- icon -->
    <script src="https://kit.fontawesome.com/244c1245b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Big+Shoulders+Display">

    <title>Portofolio Web</title>
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
                        <a class="blog" data-spy="scroll" style="padding-right: 30px" href="<?php echo site_url('Home/blog'); ?>">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="works" data-spy="scroll" style="padding-right: 30px" href="<?php echo site_url('Home/works'); ?>">Works</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="contact" data-spy="scroll" style="padding-right: 30px" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <?php if (empty($this->session->userdata('name'))) {
                            echo '<a class="contact" data-spy="scroll" style="padding-right: 30px " href="' . base_url('Login') . '">Login</a>';
                        } else if ($this->session->userdata('name')) {
                            echo '<a class="contact" data-spy="scroll" style="padding-right: 30px " href="' . base_url('Login/logout') . '">Logout</a>';
                        } ?>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- hero -->
    <section class="hero">
        <div class="container mb-5">
            <div class="row flex-column-reverse flex-md-row text-md-start text-center mb-5">
                <div class="col-md-6 mt-5 mt-md-0">
                    <h1>Hi, I am Hema,</h1>
                    <h1>Creative Technologist</h1>
                    <p class="mt-md-5 mt-4">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    <a href="<?= base_url('home/cv'); ?>" class="btn mt-md-5 mt-4">Download Resume</a>
                </div>
                <div class="col-md-5 text-md-end ">
                    <img src="<?php echo site_url('assets/img/profil.png'); ?>" class="img-fluid  mt-5 mt-md-0" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- recent post -->
    <section class="recent">
        <div class="container p-4">
            <div class="row mb-3">
                <div class="col d-flex justify-content-md-between justify-content-center">
                    <div class="RecentText text-md-start text-center">Recent posts</div>
                    <a href="#" class="viewText">view all</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card bg-white rounded-3 py-4 px-md-5 px-3 border-0">
                        <h3>Making a design system from scratch</h3>
                        <div class="d-flex mt-4">
                            <p>12 Feb 2020</p>
                            <p class="ms-3 me-3">|</p>
                            <p class="keterangan">Design, Pattern</p>
                        </div>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-white rounded-3 py-4 px-md-5 px-3 border-0">
                        <h3>Creating pixel perfect icons in Figma</h3>
                        <div class="d-flex mt-4">
                            <p>12 Feb 2020</p>
                            <p class="ms-3 me-3">|</p>
                            <p>Figma, Icon Design</p>
                        </div>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- featured -->
    <section class="featured">
        <div class="container">
            <div class="row">
                <div class="featuredText my-4 text-md-start text-center">Featured works</div>
                <div class="baris d-md-flex">
                    <img src="<?php echo site_url('assets/img/fitur 1.png'); ?>" alt="fitur 1" class="img-fluid">
                    <div class="text mt-md-0 mt-4 px-4">
                        <h2><a href=" <?php echo site_url('Home/worksdetail'); ?>">Designing Dashboards</a></h2>
                        <div class="d-flex my-4">
                            <div class="tahun me-4">2020</div>
                            <div class="keterangan">Dashboard</div>
                        </div>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
                <hr class="my-3">
                <div class="baris d-md-flex">
                    <img src="<?php echo site_url('assets/img/fitur 2.png'); ?>" alt="fitur 2" class="img-fluid">
                    <div class="text mt-md-0 mt-4 px-4">
                        <h2>Vibrant Portraits of 2020</h2>
                        <div class="d-flex my-4">
                            <div class="tahun me-4">2018</div>
                            <div class="keterangan">Illustration</div>
                        </div>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
                <hr class="my-3">
                <div class="baris d-md-flex">
                    <img src="<?php echo site_url('assets/img/fitur 3.png'); ?>" alt="fitur 3" class="img-fluid">
                    <div class="text mt-md-0 mt-4 px-4">
                        <h2>36 Days of Malayalam type</h2>
                        <div class="d-flex my-4">
                            <div class="tahun me-4">2018</div>
                            <div class="keterangan">Typography</div>
                        </div>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                    </div>
                </div>
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