<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- own css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/worksdetail.css'); ?>">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/244c1245b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Big+Shoulders+Display">

    <title>Portofolio Web</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                <div class="navbar-nav text-end">
                    <li class="nav-item dropdown justify-content-end">
                        <a class="nav-link active" data-spy="scroll" style="padding-right: 10px" href="<?php echo site_url('Home/Blog'); ?>">Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" style="color: #FF6464;" data-spy="scroll" style="padding-right: 30px" href="<?php echo site_url('Home/Works'); ?>">Works</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" data-spy="scroll" style="padding-right: 30px" href="contact.html">Contact</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <!-- section design -->
    <section id="worksdetail ">
        <div class="container">
            <h1 class="fw-bold-md">Designing Dashboards with usability in mind</h1>
            <div class="d-flex">
                <h3 style="color: white;margin-top: 7px; ">2020</h3>
                <div class="sub-title-md ms-3" style="
            font-size: 20px;;">Dashboard, User Experience Design</div>
            </div>
            <div class="justify-content-center">
                <p style="position: center; color: rgb(0, 0, 0);font-size: 16px;padding-bottom: 5px;padding-top: 10px;">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                <img class="img-fluid text-center" src="<?php echo site_url('assets/img/img1.png'); ?>" </div>
                <div class="heading">
                    <h1>Heading 1</h1>
                    <h2>Heading 2</h2>
                    <p style="position: center; color: rgb(0, 0, 0);font-size: 16px;padding-bottom: 5px;padding-top: 10px;">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </div>
                <div>
                    <img class="img-fluid text-center" src="<?php echo site_url('assets/img/img2.png'); ?>" </div>
                    <img class="img-fluid text-center" src="<?php echo site_url('assets/img/img3.png'); ?>" </div>
                </div>
            </div>
    </section>
    <footer class="container mt-5 py-5 text-center">
        <div class="d-flex justify-content-center">
            <a href="#"><img src="<?php echo site_url('assets/img/fb.png'); ?>" alt="facebook" class="img-fluid"></a>
            <a href="#"><img src="<?php echo site_url('assets/img/insta.png'); ?>" alt="instagram" class="img-fluid"></a>
            <a href="#"><img src="<?php echo site_url('assets/img/twitter.png'); ?>" alt="twitter" class="img-fluid"></a>
            <a href="#"><img src="<?php echo site_url('assets/img/Linkedin.png'); ?>" alt="Linkedin" class="img-fluid"></a>
        </div>
        <p class="my-4">Copyright ©2020 All rights reserved </p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>