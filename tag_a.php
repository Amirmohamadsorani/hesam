<!DOCTYPE html>
<html lang="fa">
<head>
<?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه موکت</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="moket.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark-subtle fixed-top nav_back">
            <a href="#" class="navbar-brand"></a>
            <a class="navbar-brand" href="index.php">فروشگاه موکت امیر کارپت</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <?php if(isset($_SESSION["login"])){ ?>
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php"> خروج </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="sabad_kharid.php"> سبد خرید </a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link " href="register.php"> ثبت نام </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php"> ورود </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link " href="index2.php">   صفحه اصلی </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link " href="about.php"> درباره ما </a>
                        </li>
                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                        <li class="nav-item">
                            <a class="nav-link " href="citynew.php">محصول جدید</a>
                        </li>
 
                    <?php } ?>
                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                        <li class="nav-item"><a class="nav-link " href="menu_mahsol.php">مدیریت </a></li>
                        <li class="nav-item">
                            <a class="nav-link " href="sellform_panel.php"> مشخصات محصولات فروخته شده </a>
                        </li>

                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
