<?php
$base_url = 'localhost/first_repository/public/';
session_start();
?>

<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <img src="./img/logo.png" style=" width: 6%; margin-top: -15px; margin-bottom: -15px;">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="./index.php" class="nav-link px-2 text-secinondary">Home</a></li>
                <li><a href="./about.php" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="./services.php" class="nav-link px-2 text-white">Services</a></li>
                <li><a href="./contact.php" class="nav-link px-2 text-white">Contact us</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <div class="text-end" id="header-buttons">

                <?php if (isset($_SESSION["user_details"]->Username)) {?>
                <form method="post" id="frm-logout">
                    <input type="hidden" name="form_name" value="logout">
                    <input type="submit" name="logout" class="btn btn-outline-light me-2" value="Log Out"></input>
                </form>
                <?php } else {?>
                <button type="button" class="btn btn-outline-light me-2" data-bs-target="#mdl-login"
                    data-bs-toggle="modal">Login</button>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#signUp">Sign-up</button>
                <?php }
?>
            </div>
        </div>
    </div>
</header>
<?php include "./modal/login_modal.php";?>
<?php include "./modal/sign_up.php";include "./modal/forgot_password.php"?>