<?php
  require_once("admin/pages/connect.php");
  if(!empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['msg']))
  {
    if(isset($_POST['send']))
    {
      extract($_POST);
      $mail=filter_var($mail,FILTER_VALIDATE_EMAIL);
      $devis=$pdo->prepare("INSERT into devis values('',:nom,:phone,:mail,:subj,:msg)");
      $devis->bindParam(":nom",$nom);
      $devis->bindParam(":phone",$phone);
      $devis->bindParam(":mail",$mail);
      $devis->bindParam(":subj",$subj);
      $devis->bindParam(":msg",$msg);
      $devis->execute();
      $well="Le dévis vous sera envoyé sur votre email";
    }
  }
  else
  {
    $well= "Les Champs avec * sont obligatoires";
  }
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Commande de dévis</title>
  <meta content="" name="descriptison">
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

<body style="background: #5F7CC2;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"   style="color: #5F7CC2;">BTP<span><sup>+</sup></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo"><img src="assets/img/logovr.jpg" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Acceuil</a></li>
          <li><a href="index.php#about">Apropos de nous</a></li>
          <li><a href="index.php#services">Domaines</a></li>
          <li><a href="index.php#blog">Blog</a></li>
          <li><a href="index.php#portfolio">Références</a></li>
          <li><a href="index.php#team">Organisation</a></li>
          <li  class="active"><a href="commande.php">Obtenir le dévis</a>
          <li><a href="index.php#contact">Contact</a></li>


        </ul>
      </nav><!-- .nav-menu -->

      <a href="#geni" class="get-started-btn scrollto">Défiler</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class='text text-success text-center'>
              <?php if(isset($well)): echo $well ?><?php endif?>
          </h2>
          <ol>
            <li><a href="index.php">Acceuil</a></li>
            <li>Demande de dévis</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 align-self-end">
            <img src="assets/img/affiche.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-7 align-self-center mb-5">

            <div class="bg-black  quote-form-wrap wrap text-white">
              <div class="mb-5">
                <h2 class="section-title mb-4">Demande de Dévis</h2>
              </div>
              <form action="" class="quote-form" method="POST">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" placeholder="Votre Nom*" name='nom'>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" placeholder="Numero Phone" name='phone'>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" placeholder="Email*" name='mail'>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" placeholder="Sujet" name='subj'>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <textarea  class="form-control" id="" placeholder="Message*" cols="30" rows="7" name='msg'></textarea>
                  </div>
                  <div class="col-md-6 align-self-end">
                    <input type="submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Envoyer Devis" name='send'>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BTP<span><sup>+</sup></span></h3>
              <p>
                <span style="font-size: 13px;">Commune Mukaza, Avenue Kunkiko n°27 <br>
                Rohero 2</span><br><br>
                <strong>Phone:</strong><span style="font-size: 13px;"> +257 79 97 88 77 | +257 61 12 00 03 </span><br>
                <strong>Email:</strong> info@btpgeotech.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/BTP-PLUS-Services-102080274924516" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
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
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#team">Obtenir le dévis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Domaines</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Ingénierie Civil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Laboratoire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Génie Environnemental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#features">Formations</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>S'abonner aux notifications</h4>
            <p>Ecrivez votre email </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="S'abonner">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2020</span></strong>. Tous les droits réservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-php-template/ -->
        Développé par <a href="index.php">Réné</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line" style="background-color: #5F7CC2;color: white; "></i></a>
  <!-- <div id="preloader"></div> -->

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

</php>