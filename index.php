<?php
require_once("admin/pages/connect.php");
$blog=$pdo->query("SELECT * from article limit 0,3");
$blog->execute();

$domaine=$pdo->query("SELECT * from domaine");
$domaine->execute();
$data=$domaine->fetchAll();


$personnels = selectAll('personnel');



$hydroliques = selectByQuery("SELECT * FROM reference WHERE reference = 'HYDRAULIQUE' ");
$routes = selectByQuery("SELECT * FROM reference WHERE reference = 'ROUTE' ");
$batiments = selectByQuery("SELECT * FROM reference WHERE reference = 'BATIMENT' ");

$toutProjets = selectAll('reference');

// var_dump($toutProjets);

// die();

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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php" style="color: #5F7CC2;">BTP<sup>+</sup></a></h1>
      <!-- Uncomment below if you prefer to use an image logo 
      <a href="index.php" class="logo"><img src="assets/img/logovr.jpg" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Acceuil</a></li>
          <li><a href="#about">Apropos</a></li>
          <li><a href="#features">Domaines</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#portfolio">Références</a></li>
          <li><a href="#team">Organisation</a></li>
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
          <li><a href="#contact">Contact</a></li>
<!--           <li><a href="admin/connexion.php">Connexion</a></li>
-->
</ul>
</nav><!-- .nav-menu -->

<a href="#clients" class="get-started-btn scrollto">Partenaires</a>

</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
    <h1 style="">Bienvenue dans BTP<sup>+</sup></h1>
    <h2><marquee behavior="alternative">Efficacité, disponibilité et fiabilité.</marquee></h2>
    <div class="d-flex">
      <a href="#map" class="btn-get-started scrollto"><i class="icofont-hand-down"></i>Localisation</a>
      <!-- <a href="https://youtu.be/yc5AD846HHM" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true">Mesure de la déflexion... <i class="icofont-play-alt-2"></i></a> -->
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-end">
        <div class="col-lg-11">
          <div class="row justify-content-end">

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-engineer"></i>
                <span data-toggle="counter-up">87</span>
                <p>Clients</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-worker"></i>
                <span data-toggle="counter-up">27</span>
                <p>Projets</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-users-social"></i>
                <span data-toggle="counter-up">16</span>
                <p>Equipe</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-under-construction-alt"></i>
                <span data-toggle="counter-up">23</span>
                <p>Services</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
          <img src="assets/img/affiche.jpg" class="img-fluid" alt="">
          <a href="https://youtu.be/fRfFCJ7hFIA" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 pt-3 pt-lg-0 content">
          <h3>BTP PLUS SERVICES</h3>
          <p class="">
            BTP Plus Services est une firme burundaise indépendante créée par deux ingénieurs en génie civil ayant plus de 10 ans d’expérience en services d’ingénierie d’assistances aux maîtrises d’ouvrage et de réalisation des travaux au Burundi et ailleurs. <br>  
            Composée d’ingénieurs, BTP<sup>+</sup> Services intervient dans les domaines d’Ingénierie civile, de la Géotechnique et du Génie Environnemental et se distingue dans le secteur du bâtiment, des transports, de l’eau, de l’aménagement urbain, du développement institutionnel et sociale, de la formation et gestion des ressources humaines

          </p>
            <!--<ul>
              <li><i class="bx bx-check-double"></i>Topographie</li>
              <li><i class="bx bx-check-double"></i>Architecture </li>
              <li><i class="bx bx-check-double"></i>Géotechnique</li>
              <li><i class="bx bx-check-double"></i>Structures</li>
              <li><i class="bx bx-check-double"></i>Transport</li>
              <li><i class="bx bx-check-double"></i>Eau et Environnement  </li>
            </ul>-->
            <p>
              La créativité de nos équipes spécialisées en bâtiment, leur maîtrise des dernières avancées technologiques ainsi que leur capacité à réaliser des projets exceptionnels et d'une grande complexité technique font partie intégrante de nos standards d'excellence. Nous avons mis au point une expertise de pointe en matière de solutions originales et efficientes qui respectent les enjeux économiques, sociaux et environnementaux
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/mission.png" height="300" width="200" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Mission BTP<sup>+</sup></h5>
                <p class="card-text">Notre objectif est le projet et sa parfaite réalisation dans le cadre d’un développement continu respectueux des hommes et de l’environnement. BTP<sup>+</sup> Services est structuré autour des domaines d’activités ci-après: <br><br>

                  -Topographie <br>
                  -Géotechnique <br>
                  -Transport <br>
                -Eau et Environnement</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/experience.png" height="300" width="200" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Notre experience</h5>
                <p class="card-text">L’expérience du bureau BTP+ Services repose sur l’expérience professionnel de ses experts partenaires techniques qui coiffent tous les secteurs d’intervention. Vu les exigences du marché de construction, BTP+ Services s’est vu obligé de sous-traiter les projets dans le but de constituer sa position sur le marché. 
                BTP+ Services imagine, conçoit des projets de constructions divers, publics et privés de manière professionnelle respectueux de l’environnement. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" height="300" width="200" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/pngwing.com(12).png" class="card-img-top" alt="..." height="300" width="200">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">Excellence et Innovation</h5>
                <p class="card-text">Créée au moment de l’évolution de la technologie, BTP+ Services est reconnue comme le précurseur de la construction écologique au Burundi et ce, sur quatre marchés : <strong>la maison individuelle, la résidence de tourisme, le logement social et le bâtiment professionnel.</strong> 
                Aujourd’hui, dirigée par les jeunes ingénieurs leaders sur ce secteur d’activité tant en nombre de réalisations que du fait de son approche novatrice de l’éco-construction, BTP+ Services se distingue par l’efficacité de son organisation et l’originalité de son approche constructive.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Boxes Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/logofiadi.png" class="img-fluid" alt="" target='branquet'><span style="color: white;"></span>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/Logo-SOGEA.png" class="img-fluid" alt="">   <span style="color: white;"></span>
          </div>

          <!--<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>-->

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="icofont-architecture"></i>
              <h4 class="d-none d-lg-block">Génie Civil</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="icofont-eco-environmen"></i>
              <h4 class="d-none d-lg-block">Génie environnemental</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="icofont-laboratory"></i>
              <h4 class="d-none d-lg-block">Géotechnique</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="icofont-read-book"></i>
              <h4 class="d-none d-lg-block">Formations</h4>
            </a>
          </li>
        </ul>

        
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" >
                <h3>Génie Civil</h3>
                <p  style="margin: 10px;">
                  BTP<sup>+</sup> Services couvre la totalité des activités du Génie Civil. Nous envisageons des réponses techniques à la spécificité de chaque projet et sa situation géographique. Notre équipe intervient en conception, pilotage et réalisation d'ouvrages d'art, d'ouvrages hydrauliques ou industriels à forte technicité.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>Topographie</li>
                  <li><i class="ri-check-double-line"></i>Bâtiment</li>
                  <li><i class="ri-check-double-line"></i>Hydraulique</li>
                  <li><i class="ri-check-double-line"></i>Routes</li>
                <li><i class="ri-check-double-line"></i>VRD</li>
                <li><i class="ri-check-double-line"></i>Structures</li>
                </ul>
                <p>
                 
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/civil.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" style="">
                <h3></h3>
                <p>
                  
                </p>
                <p style="color: #5F7CC2;">
                  <strong>UNE VOCATION PRATIQUE DE TERRAIN</strong>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i><a href="labo-details.php" target="_blank" style="color: black;">Ingénierie Géotechnique</a></li>
                  <li><i class="ri-check-double-line"></i><a href="labo/sondages_insitu.php" style="color: black;"> Sondages et essais in situ</a></li>
                  <li><i class="ri-check-double-line"></i><a href="#" style="color: black;">Laboratoire</a></li>
                  
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/new1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3></h3>
                <p>
                  
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i></li>
                  <li><i class="ri-check-double-line"></i></li>
                  <li><i class="ri-check-double-line"></i></li>
                </ul>
                <p class="font-italic">
                 
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/pngwing.com(16).png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3></h3>
                <p>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i></li>
                  <li><i class="ri-check-double-line"></i> </li>
                  <li><i class="ri-check-double-line"></i> </li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/pngwing.com(20).png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div></div></section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Services</h2>
              <p>Appréciez nos services</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">

              <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                  <i class="icofont-building"></i>
                  <h4><a href="#">Bâtiment</a></h4>
                  <p>En plus de concevoir des bâtiments conformes aux exigences techniques, les ingénieurs de BTP+ Services veillent à recourir à toute l'expertise nécessaire pour concevoir des composantes et des éléments faciles à construire, qui s'intègrent parfaitement, de manière à produire une expression générale raffinée et à mettre en valeur la vocation du bâtiment.

                  </p>
                </div>
              </div>

              <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                  <i class="icofont-road"></i>
                  <h4><a href="#">Routes</a></h4>
                  <p>BTP<sup>+</sup> Services intervient dans la construction des routes, de l'étude du tracé en se réferrant sur la topographie, la géotechnique, le terrassement, l'assainissement et la maintenance. Notre équipe maîtrise le terrain et les techniques spécifiques de terrassement et de revêtement des routes.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="icon-box">
                  <i class="icofont-chart-histogram-alt"></i>
                  <h4><a href="#">Topographie</a></h4>
                  <p>Nous comptons sur les dernières technologies d’acquisition de données sur le terrain et sur des logiciels, ceci nous permet fournir un service avec la plus haute qualité, en réalisant touts les travaux au sein de l’entreprise et avec des moyens propres, pour le développement des projets et des études. <br><br>De cette façon, on réalise autant les études préalables de cartographie, de soulèvement topographique, de cartographie thématique et d’études de tracé, que les propres travaux d’exécution du projet comme les mesures, les travaux d’implantation, le piquetage. </p>
                </div>
              </div>

              <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                  <i class="icofont-settings"></i>
                  <h4><a href="#">Structures</a></h4>
                  <p>Spécialiste de l’Ingénierie des Structures, BTP<sup>+</sup> conçoit, optimise, et réalise les études de détails de tout type de structures dans les domaines suivants :</p>
                  <p>
                    <li>Bâtiments</li>
                    <li>Industrie</li>
                    <li>Génie Civil</li>
                    <li>Ouvrages Hydrauliques</li>
                  </p>

                  <p>BTP<sup>+</sup> maîtrise au sein de ses équipes les calculs de dimensionnement et les calculs de détail pour l’ensemble des matériaux propres à la construction :</p>
                  <p>
                    <li>Béton armé</li>
                    <li>Charpente Métallique</li>
                    <li>Structure mixte</li>
                  </p>

                  <p>BTP<sup>+</sup> a en outre développé son activité dans les domaines de:</p>
                  <p>
                    <li>La maitrise d'oeuvre Publique et Privé</li>
                    <li>Les études éxecution structures</li>
                    <li>L'économie de la construction Gros-Oeuvres et tous corps d'Etats</li>
                    <li>Les etudes de terrassements et VRD</li>
                    <li>Les diagnostics</li>
                  </p>
                </div>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                  <i class="icofont-water-bottle"></i>
                  <h4><a href="#">Hydraulique</a></h4>
                  <p>L'expertise en travaux hydrauliques de BTP<sup>+</sup> Services permet d'assurer  l'accès à l'eau et l'assainissement aux populations sur tous les territoires. Nous offrons des solutions intégrées pour les systèmes de traitement d'eau.</p>
                </div>
              </div>
            </div>

          </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container" data-aos="zoom-in">

            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">
                <img src="assets/img/dt.jpg" class="testimonial-img" alt="">
                <h3>Ir Vénuste NDUWAYEZU</h3>
                <h4>Spécialités:</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Génie civil, DAO et CAO <br> Email: venuste@btpgeotech.com
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/team/imagefaux.jpg" class="testimonial-img" alt="">
                <h3>Vincent de Paul NKURUNZIZA</h3>
                <h4>Spécialités</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Communication; <br>Email: vincentdp@btpgeotech.com
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/e.jpg" class="testimonial-img" alt="">
                <h3>Elysée NDUWAMAHORO</h3>
                <h4>Spécialités</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Génie civil <br> Géotechnique  <br> Hydrologie et CAO; 
                  <br>
                  Email: elysee@btpgeotech.com
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/team/imagefaux.jpg" class="testimonial-img" alt="">
                <h3>NIYOYUNGURUZA Patrice</h3>
                <h4>Spécialités</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Génie civil   <br> Hydraulique et Assainissement; <br>
                  Email: patrice@btpgeotech.com
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-mf sect-pt4 route">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box text-center">
                  <h3 class="title-a">
                    Blog
                  </h3>
                  <p class="subtitle-a">
                    Nos informations à la une | ...
                  </p>
                  <div class="line-mf"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <?php foreach($res=$blog->fetchAll() as $k=> $val):?>
                <div class="col-md-4">
                  <div class="card card-blog" >
                    <div class="card-img">
                      <a href="blog-single.php?id=<?= $res[$k]['idart'] ?>"><img src="admin/<?= $res[$k]['media']?>" alt="Image" class="img-fluid"></a>
                    </div>
                    <div class="card-body">
                      <div class="card-category-box">
                        <div class="card-category">
                          <h6 class="category"><?= $res[$k]['slug']?></h6>
                        </div>
                      </div>
                      <h5 class="card-title"><a href="blog-single.php?id=<?= $res[$k]['idart'] ?>" target="_blank"><?= substr($res[$k]['name'],0,50) ?></a></h5>
                      <p class="card-description"><?= substr($res[$k]['descr'],0,100)."..."; ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </section><!-- End Blog Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2 class="text-center">Nos réalisations</h2>
              <p></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">Tous les projets</li>
                  <li data-filter=".filter-batiment">Bâtiment</li>
                  <li data-filter=".filter-routes">Routes</li>
                  <li data-filter=".filter-hydraulique">Hydraulique</li>
                </ul>
              </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

             <!--  BATIMENTS -->

             <?php foreach ($batiments  as $key => $value): ?>
               
             


              <div class="col-lg-4 col-md-6 portfolio-item filter-batiment">
                <img src="admin/<?= $value['picture'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $value['nom_projet'] ?></h4>
                  <p></p>
                  <a href="admin/<?= $value['picture'] ?>" data-gall="portfolioGallery" class="venobox preview-link" title="zoom-in"><i class="bx bx-plus"></i></a>
                  <a href="batiment.php?id=<?= $value['id'] ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <?php endforeach ?>

              <!-- HYDROLIQUE -->

              <?php foreach ($hydroliques as $key => $value): ?>

                   <div class="col-lg-4 col-md-6 portfolio-item filter-hydraulique">
                <img src="admin/<?= $value['picture']?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $value['nom_projet'] ?></h4>
                  <p></p>
                  <a href="admin/<?= $value['picture'] ?>" data-gall="portfolioGallery" class="venobox preview-link" title=""><i class="bx bx-plus"></i></a>
                  <a href="hydraulique.php?id=<?= $value['id'] ?>" class="details-link" title="Plus d'infos"><i class="bx bx-link"></i></a>
                </div>
              </div>
                
              <?php endforeach ?>


          <!--  ROUTES -->


          <?php foreach ($routes as $key => $value): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-routes">
                <img src="admin/<?= $value['picture'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $value['nom_projet'] ?><span style="font-weight: bold;">Avenue de l'industrie.</span> </h4>
                  <p></p>
                  <a href="admin/<?= $value['picture'] ?>" data-gall="portfolioGallery" class="venobox preview-link" title=""><i class="bx bx-plus"></i></a>
                  <a href="route.php?id=<?= $value['id'] ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            
          <?php endforeach ?>



              

            </div>

          </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Administration</h2>
              <p></p>
            </div>

            <div class="row">



              <?php foreach ($personnels as $key => $value): ?>

               <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="pic"><img src="admin/<?= $value['pic_path']?>" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4><?= $value['nom'] ?></h4>
                    <span><?= $value['fonction'] ?></span>
                    <div class="social">
                      <a href=" <?= $value['link_twitter'] ?>"><i class="icofont-twitter"></i></a>
                      <a href=" <?=
                      $value['link_facebook'] ?>"><i class="icofont-facebook"></i></a>
                      <a href="<?= $value['link_gmail'] ?>"><i class="icofont-email"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach ?>

         
            </div>


          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

        <div class=" section-title">
          <h2>Contactez-nous</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Adresse</h3>
                  <p>Commune Mukaza <br>Rohero II <br>Avenue Kunkiko <br>Numero 27</p></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@btpgeotech.com<br><!--contact@example.com--></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Téléphone</h3>
                  <p>+257 79 97 88 77</p>
                </div>
              </div>
            </div>

          </div>


      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<div class="col-lg-12 mt-4 mt-lg-0" id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.4399617117128!2d29.37322830094652!3d-3.3795089268749248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c183e9145437e5%3A0xf99e3ca50c6abfc7!2sBTP%20Plus%20Services!5e0!3m2!1sen!2sbi!4v1595417881939!5m2!1sen!2sbi" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

        <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>S'abonner aux notifications</h4>
          <p>Ecrivez votre email </p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="S'abonner">
          </form>

        </div> -->

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
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line" style="color: #fff;background-color: #5F7CC2;"></i></a>
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

</p>