<?php

require 'admin/pages/connect.php';

$images = selectByQuery("SELECT * FROM reference WHERE reference = 'HYDRAULIQUE' ");

// var_dump($images);
// die();

$article = null;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

  # code...

  $article = selectByQuery("SELECT * FROM reference WHERE reference = 'HYDRAULIQUE'  AND id=".$_GET['id']);
}else{
  header('Location: index.php');
  exit;
}


if(!$article){
  header('Location: index.php');
  exit;

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hydraulique-Détails</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logovr.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi - v2.1.0
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-php-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">BTP+</a></h1>
  
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Acceuil</a></li>
          <li><a href="index.php#about">Apropos</a></li>
          <li><a href="index.php#services">Domaines</a></li>
          <li class="active"><a href="index.php#portfolio">Références</a></li>
          <li><a href="index.php#team">Organisation</a></li>
          <li><a href="commande.php">Obtenir le dévis</a></li>
           <!-- <ul>
              <li class="drop-down">
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>-->
          </li>
          <li><a href="index.php#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#portfolio-details" class="get-started-btn scrollto">Défiler</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Hydraulique-Détails</h2>
          <ol>
            <li><a href="index.php">Acceuil</a></li>
            <li>Références</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">
          <div class="portfolio-info">
            <h3>Informations sur le projet</h3>
            <ul>
              <li><strong>Catégorie</strong>: Hydraulique</li>
              <!--<li><strong>Client</strong>: </li>-->
            </ul>
          </div>


          <div class="owl-carousel portfolio-details-carousel">
            

            <?php foreach ($images as $key => $value): ?>
              <img src="admin/<?= $value['picture']?>" class="img-fluid" alt="">
              
            <?php endforeach ?>
      
          </div>

          

        </div>

        <div class="portfolio-description">
          <h2> <?= nl2br($article[0]['nom_projet']) ?? ""  ?></h2>
          <p>
           <?= nl2br($article[0]['description']) ?? ""  ?>
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BTP<span><sup>+</sup></span></h3>
              <p>
                Commune Mukaza,Avenue Kunkiko n°27 <br>
                Rohero 2<br><br>
                <strong>Phone:</strong> +257 79 97 88 77<br>
                <strong>Email:</strong> info@btpgeotech.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/BTP-PLUS-Services-102080274924516" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCwPI530g2w5Ep3AHE9lGDsQ" class="google-plus"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Plan du site</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">Apropos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Domaines</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Références</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#team">Organisation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="commande.php">Obtenir le dévis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Génie Civil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Géotechnique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Génie Environnemental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Formations</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        BTP<span>+</span> &copy; Copyright <strong><span>2020</span></strong>. Tous les droits réservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-php-template/ -->
        Développé par <a href="https://bootstrapmade.com/">Réné</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>