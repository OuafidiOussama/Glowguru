<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawsome link -->
    <script src="https://kit.fontawesome.com/84ef55bb95.js" crossorigin="anonymous"></script>

    <!-- Css link -->
    <link rel="stylesheet" href="<?php echo URLROOT ;?>/css/style.css">

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title><?php echo SITENAME ;?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-lg" style="background-color: var(--beige);">
        <div class="container-sm">
          <a class="navbar-brand fw-bold" href="<?php echo URLROOT ;?>">Glow.<span style="color: var(--sumo);">Guru</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo URLROOT ;?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT ;?>/pages/products">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT ;?>/pages/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT ;?>/pages/contact">Contact Us</a>
              </li>
            </ul>
            <?php if(isset($_SESSION['admin_id'])) : ?>

            <?php else : ?>
              <a href="<?php echo URLROOT ;?>/admins/login"><button class="login"><i class="fa-solid fa-user"></i></button></a>
            <?php endif; ?>
          </div>
        </div>
      </nav>
