<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="application/view/cv/cv.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        <?php echo file_get_contents('./assets/css/cv.css') ?>
    </style>

</head>

<body>
    <div class="container">

        <div class="profile">
            <div class="image">
                <img src="<?php echo 'assets/img/img.jpg'; ?>" alt="">
            </div>
            <div class="k">
                <div class="name">
                    <?php foreach (array_slice($cv_data, 0, 1) as $row) : ?>
                        <h5><?= $row['value'] ?></h5>
                    <?php endforeach; ?>
                </div>
                <div class="name">
                    <?php foreach (array_slice($cv_data, 2, 1) as $row) : ?>
                        <p class="career"><?= $row['value'] ?></h6>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main-title">
                <h2>About Me</h2>
            </div>
            <?php foreach (array_slice($cv_data, 1, 1) as $row) : ?>
                <p class="dt"><?= $row['value'] ?></p>
            <?php endforeach; ?>
        </div>
        <div class="main">
            <div class="main-title">
                <h2>LANGUAGES</h2>
            </div>
            <?php foreach (array_slice($languages, 0, 1) as $row) : ?>
                <p class="dt" style="padding-bottom: 7px ;"><?= $row['name'] ?></p>
                <div class="progress-bar">
                    <div class="progress w-progress"></div>
                </div>
            <?php endforeach; ?>
            <?php foreach (array_slice($languages, 1, 1) as $row) : ?>
                <p class="dt" style="padding-bottom: 7px ;"><?= $row['name'] ?></p>
                <div class="progress-bar">
                    <div class="progress c-progress"></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="main">
            <div class="main-title">
                <h2>EXPERIENCES</h2>
            </div>
            <?php foreach (array_slice($experiences, 3, 1) as $row) : ?>
                <p class="dt" style="padding-left: 300px;"><?= $row['start_date'] ?> - <?= $row['resign_date'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 3, 1) as $row) : ?>
                <p class="dt"><?= $row['name'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 3, 1) as $row) : ?>
                <p class="dt"><?= $row['description'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 0, 1) as $row) : ?>
                <p class="dt" style="padding-left: 300px;"><?= $row['start_date'] ?> - <?= $row['resign_date'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 0, 1) as $row) : ?>
                <p class="dt"><?= $row['name'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 0, 1) as $row) : ?>
                <p class="dt"><?= $row['description'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 1, 1) as $row) : ?>
                <p class="dt" style="padding-left: 300px;"><?= $row['start_date'] ?> - <?= $row['resign_date'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 1, 1) as $row) : ?>
                <p class="dt"><?= $row['name'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($experiences, 1, 1) as $row) : ?>
                <p class="dt"><?= $row['description'] ?></p>
            <?php endforeach; ?>

        </div>
        <div class="main">
            <div class="main-title">
                <h2>SKILLS</h2>
            </div>
            <?php foreach (array_slice($skills, 0, 1) as $row) : ?>
                <p class="dt" style="padding-bottom: 7px ;"><?= $row['name'] ?></p>
                <div class="progress-bar">
                    <div class="progress a-progress"></div>
                </div>
            <?php endforeach; ?>
            <?php foreach (array_slice($skills, 1, 1) as $row) : ?>
                <<p class="dt" style="padding-bottom: 7px ;"><?= $row['name'] ?></p>
                    <div class="progress-bar">
                        <div class="progress b-progress"></div>
                    </div>
                <?php endforeach; ?>
                <?php foreach (array_slice($skills, 2, 1) as $row) : ?>
                    <<p class="dt" style="padding-bottom: 7px ;"><?= $row['name'] ?></p>
                        <div class="progress-bar">
                            <div class="progress e-progress"></div>
                        </div>
                    <?php endforeach; ?>
                    <?php foreach (array_slice($skills, 3, 1) as $row) : ?>
                        <<p class="dt" style="padding-bottom: 7px ;"><?= $row['name'] ?></p>
                            <div class="progress-bar">
                                <div class="progress d-progress"></div>
                            </div>
                        <?php endforeach; ?>
        </div>

        <div class="main">
            <div class="main-title">
                <h2>HOBBY</h2>
            </div>
            <?php foreach (array_slice($hobbies, 2, 1) as $row) : ?>
                <p class="dt"><?= $row['hobby'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($hobbies, 3, 1) as $row) : ?>
                <p class="dt"><?= $row['hobby'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($hobbies, 1, 1) as $row) : ?>
                <p class="dt"><?= $row['hobby'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($hobbies, 4, 1) as $row) : ?>
                <p class="dt"><?= $row['hobby'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($hobbies, 5, 1) as $row) : ?>
                <p class="dt"><?= $row['hobby'] ?></p>
            <?php endforeach; ?>
        </div>
        <div class="main">
            <div class="main-title">
                <h2>EDUCATIONS</h2>
            </div>
            <?php foreach (array_slice($educations, 0, 1) as $row) : ?>
                <p class="dt" style="padding-left: 250px;"><?= $row['start_date'] ?> - <?= $row['graduated_date'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($educations, 0, 1) as $row) : ?>
                <p class="dt"><?= $row['name'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($educations, 1, 1) as $row) : ?>
                <p class="dt" style="padding-left: 250px;"><?= $row['start_date'] ?> - <?= $row['graduated_date'] ?></p>
            <?php endforeach; ?>
            <?php foreach (array_slice($educations, 1, 1) as $row) : ?>
                <p class="dt"><?= $row['name'] ?></p>
            <?php endforeach; ?>
        </div>
        <div class="contact-info">
            <div class="main-title">
                <h2>CONTACT INFO</h2>
            </div>

            <?php foreach (array_slice($social_medias, 0, 1) as $row) : ?>
                <img src="<?php echo 'assets/img/photos/ign.png'; ?>" p class="dt"><?= $row['url'] ?></p>
            <?php endforeach; ?>

            <?php foreach (array_slice($social_medias, 1, 1) as $row) : ?>
                <img src="<?php echo 'assets/img/photos/wa.png'; ?>" p class="dt"><?= $row['url'] ?></p>
            <?php endforeach; ?>

            <?php foreach (array_slice($social_medias, 2, 1) as $row) : ?>
                <img src="<?php echo 'assets/img/photos/git.png'; ?>" p class="dt"><?= $row['url'] ?></p>
            <?php endforeach; ?>

        </div>

    </div>



</body>

</html>