<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>
    <div class="container">
        <form action="register/proses" method="post">
            <?php echo $this->session->flashdata("success"); ?>
            <div class="title">Register</div>
            <div class="input-box underline">
                <input type="text" name="username" placeholder="Enter Username" required autofocus>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="name" name="name" placeholder="Enter Your name" required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter Your Password" required>
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="submit" value="Continue">
            </div>
            <div class="input-box-regis">
                <a style="Text-decoration:none; color:black" href="<?= base_url('login') ?>">Already have any account? Login</a></span>
            </div>
        </form>
    </div>
</body>

</html>