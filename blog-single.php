<?php
require_once("admin/pages/connect.php");
$id=$_GET['id'];

  $commentGet=$pdo->query("Select * from comments where id_blog= $id limit 0,4");
  $commentGet->execute();
  $listComment=$commentGet->fetchAll();


  $countable=$pdo->query("Select * from comments where id_blog= $id");
  $countable->execute();
  $number=$countable->fetchAll();

  if(isset($_GET['id']) and !empty($_GET['id']))
  {
    $id=$_GET['id'];
    $blog=$pdo->prepare("SELECT * from article where idart=:id");
    $blog->bindParam(":id",$id);
    $blog->execute();
    $res=$blog->fetch();
  }

  if(isset($_POST['valid']))
  {
    if(!empty($_POST['pseudo']) and !empty($_POST['comment']))
    {
      extract($_POST);
      $pseudo=htmlspecialchars($_POST['pseudo']);
      $comments=htmlspecialchars($_POST['comment']);
      $date=date("Y-m-d");
      $comment=$pdo->prepare("Insert into comments values('',:comment,:date,:pseudo,:id)");
      $comment->bindParam(":pseudo",$pseudo);
      $comment->bindParam(":comment",$comments);
      $comment->bindParam(":date",$date);
      $comment->bindParam(":id",$id);
      $comment->execute();
      header("Location:blog-insert.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Btp Plus Services</title>
  <meta content=" BTP Plus Services est une firme burundaise indépendante créée par deux ingénieurs en génie civil..." name="description">
  <meta content="btp plus services" name="keywords">

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

<header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php" style="color: #5F7CC2;">BTP<sup>+</sup></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo"><img src="assets/img/logovr.jpg" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php#header">Acceuil</a></li>
          <li><a href="index.php#about">Apropos</a></li>
          <li><a href="index.php#features">Domaines</a></li>
          <li class="active"><a href="index.php#blog">Blog</a></li>
          <li><a href="index.php#portfolio">Références</a></li>
          <li><a href="index.php#team">Organisation</a></li>
          <li><a href="commande.php">Obtenir le dévis</a>
            <!--<ul>
               class="drop-down"
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

      <a href="#clients" class="get-started-btn scrollto">Partenaires</a>

    </div>
  </header><!-- End Header -->

    <section id="breadcrumbs " class="breadcrumbs2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-5 ">
          <h1 class="text-center text-info"><?= nl2br($res['name']) ?></h1>
        </div>
      </div>
    </section>
  

  <!-- ======= Hero Section ======= -->
  <section class="site-section">
            <div class="container">
              <div class="row">
                <div class="col-md-8 blog-content">
                <p class="mb-5">
                <img src="<?="admin/".$res['media'] ?>" alt="" width="700" heigth="830">
                </p>
                  <p><?= nl2br($res['descr']) ?></p>
                  
                </div>
         
              </div>
            </div>
          </section>
      

     </div>
   </div>
 </section>

       <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BTP<span><sup>+</sup></span></h3>
              <p>
                <span style="font-size: 13px;">Commune Mukaza <br>Avenue Kunkiko n°27 <br>
                Rohero 2</span><br><br>
                <strong>Téléphone:</strong><span style="font-size: 12px;"> +257 79 97 88 77</span><br>
                <strong>Email:</strong> info@btpgeotech.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/BTP-PLUS-Services-102080274924516" target="_blank" class="facebook"><i class="bx bxl-facebook" ></i></a>
                <!--<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>-->
                <a href="https://www.youtube.com/channel/UCwPI530g2w5Ep3AHE9lGDsQ" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Plan du site</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Apropos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Domaines</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Références</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Organisation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="commande.php">Obtenir le dévis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Domaines</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Génie Civil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Géotechnique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Génie Environnemental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Formations</a></li>
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
        BTP<sup>+</sup> &copy; Copyright <strong><span>2020</span></strong>. Tous les droits réservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-php-template/ -->
        Développé par <a href="">Réné</a>
      </div>
    </div>
  </footer><!-- End Footer --
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
</body>

</html>
