<?php 
include('config.php');
    $voitures = $conn->query("SELECT * FROM VOITURE")->fetchAll(PDO::FETCH_ASSOC);
     // Afficher les données pour déboguer
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>La boulangerie</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bocor
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <img src="./../logo2.jpg" alt="logo" width="130px" height="130px" style="border-radius: 10px;">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A-propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="../inscription_connexion_pharmacie/inscription/inscription.php">Administrateur</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container w-100 h-70">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Bienvenue sur boulangerie Artisanal La Parisienne d'Antananarivo</h1>
        <h2>Délices artisanaux pour les gourmands exigeants. Savourez nos créations uniques.</h2>
        <a href="../cliente_page/" class="btn-get-started scrollto">Voir les produits</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="./assets/image.png" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Services</h2>
          <p data-aos="fade-in">Expérience culinaire exceptionnelle avec nos produits artisanaux de qualité supérieure. Découvrez nos délices uniques et laissez-vous séduire.</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="./slider/boul.jpeg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">La préparation </a></h5>
                <p class="card-text">La préparation dans une boulangerie artisanale allie expertise et passion. Pétrissage, levée, façonnage, cuisson et présentation 
                  soignée créent des délices uniques, prêts à ravir les papilles des clients.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Voir plus</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="./slider/image2.jpg" alt="..." style="border-radius: 40px;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Les matières premières</a></h5>
                <p class="card-text">Les matières premières utilisées dans une boulangerie artisanale sont principalement la farine, l'eau, le levain ou la levure, le sel et parfois des ingrédients supplémentaires tels que le sucre, le beurre, les œufs ou les fruits secs.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Voir plus</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="./slider/image3.jpg" alt="..." style="border-radius: 40px;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Matériel utilisé</a></h5>
                <p class="card-text">Le matériel utilisé dans une boulangerie artisanale comprend un four en brique, un pétrin, une diviseuse-formeuse, des étagères de fermentation et parfois des planches de cuisson en bois.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Voir plus</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="./slider/image5.jpg" alt="..." style="border-radius: 40px;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Qualité</a></h5>
                <p class="card-text">La boulangerie artisanale traditionnelle offre une qualité supérieure, des saveurs authentiques, une fraîcheur garantie, une variété créative et un service personnalisé, tout en préservant les traditions et en soutenant l'économie locale.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Voir plus</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">La préparation dans une boulangerie</h2>
          <p data-aos="fade-in">La préparation dans une boulangerie peut être divisée en quatre étapes principales </p>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/ingredient.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h1>Première étape:</h1>
            <p class="fst-italic">
              Préparation des ingrédients : Découvrez une sélection alléchante de produits boulangerie qui éveilleront vos sens et combleront vos envies gourmandes. 
              Que vous soyez amateur de pains fraîchement sortis du four, de viennoiseries délicieusement feuilletées ou de pâtisseries créatives, notre assortiment saura satisfaire tous les palais. Préparés avec passion par nos talentueux boulangers, ces délices vous transporteront dans un monde de saveurs et de textures irrésistibles. Laissez-vous tenter par nos créations artisanales et succombez au plaisir d'une bouchée qui évoque la tradition et le savoir-faire de la boulangerie.

              
               
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/petrissage.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
           <h1>Deuxième étape:</h1>
            <p class="fst-italic">
              Pétrissage :Les ingrédients sont soigneusement mélangés, puis pétris avec expertise pour former une pâte. Grâce à ces techniques de pétrissage appropriées, le gluten se développe, donnant à la pâte une texture élastique et homogène. Ce processus est essentiel pour obtenir des produits boulangerie de qualité supérieure. 
              La pâte ainsi préparée devient la base de pains moelleux, de viennoiseries feuilletées et de pâtisseries délicieuses, offrant une expérience gustative exceptionnelle à chaque bouchée.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/fermentation.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
           <h1>Troisième étape:</h1>
            <p>Fermentation :La pâte est laissée à fermenter dans un endroit chaud et humide, permettant à la levure ou au levain de produire du dioxyde de carbone. Ce processus fait lever la pâte, créant une texture légère et aérée dans les produits boulangerie. Mais la fermentation ne se limite pas à cela : elle joue également un rôle essentiel dans le développement des saveurs. Les arômes se développent, 
              les saveurs se complexifient, offrant ainsi une expérience gustative riche et satisfaisante.</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/faconnage.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h1>Quatrième étape:</h1>
            <p class="fst-italic">
              Façonnage et cuisson : La pâte fermentée est divisée, façonnée avec soin et disposée sur des plaques de cuisson. Puis, les produits boulangerie sont cuits dans un four préchauffé à une température spécifique. Cette étape cruciale permet d'obtenir une croûte dorée et croustillante, ainsi qu'une cuisson uniforme à l'intérieur. Le résultat est une fusion parfaite de textures et de saveurs,
               avec des produits boulangerie qui se révèlent moelleux, gourmands et délicieusement dorés.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h1 data-aos="fade-in">Produits</h1>
          <p data-aos="fade-in">Découvrez une sélection alléchante de produits boulangerie qui éveilleront vos sens et combleront vos envies gourmandes. Que vous soyez amateur de pains fraîchement sortis du four, de viennoiseries délicieusement feuilletées ou de pâtisseries créatives, notre assortiment saura satisfaire tous les palais. 
            Préparés avec passion par nos talentueux boulangers, ces délices vous transporteront dans un monde de saveurs et de textures irrésistibles. Laissez-vous tenter par nos créations artisanales et succombez au plaisir d'une bouchée qui évoque la tradition et le savoir-faire de la boulangerie.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-app">Bio</li>
              <li data-filter=".filter-card">Simple</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/campagne.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/campagne.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain de campagne"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain de campagne</h4>
                <p>3000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/levain.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/levain.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain au levain"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain au levain</h4>
                <p>3000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/lait.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/lait.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Petit pain au lait"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Petit pain au lait</h4>
                <p>2000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/choco.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/choco.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain brioche au choco"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain brioche au choco</h4>
                <p>2000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/bio1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/bio1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain complet bio"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain complet bio</h4>
                <p>8000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/bio2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/bio2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain au levain bio"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain au levain bio</h4>
                <p>6000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/bio.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/bio.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain au curcuma et au poivre"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain au curcuma et au poivre</h4>
                <p>8000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/bio4.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/bio4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Petit pain au lait bio"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Petit pain au lait bio</h4>
                <p>3000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/bio6.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/bio6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain de compagne bio"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain de compagne bio</h4>
                <p>6000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/bio12.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/bio12.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain brioche au choco bio"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain brioche au choco bio</h4>
                <p>3000Ar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/com.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/com.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pain complet"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="Plus de détails"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Pain complet</h4>
                <p>3500Ar</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Nos but</h2>
          <p data-aos="fade-in">La boulangerie artisanale traditionnelle vise à offrir une expérience gustative authentique et de qualité, en préservant les saveurs et les techniques héritées de génération en génération.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="zoom-in">
            <span class="featured-badge">Featured</span>
            <h3>Nos but</h3>
            <ul>
              <li><i class="bx bx-check"></i> Qualité, satisfaction, tradition.</li>
              <li><i class="bx bx-check"></i> Authenticité, préservation, excellence.</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bx bx-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">En savoir plus</a>
          </div>

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.338222325986!2d47.6035398754953!3d-18.827623382326454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f085aeec1d909f%3A0x46adadd169bc591b!2sLa%20Parisienne!5e0!3m2!1sfr!2smg!4v1699736843783!5m2!1sfr!2smg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>vous pouvez contacté ou envoyé des messages si vous voulez quelques information</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Contact</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="name" placeholder="votre Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="contact" class="form-control" id="contact" placeholder="votre numero" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="votre Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyez votre nmessage</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <img src="./../logo2.jpg" width="160px" height="90px" style="border-radius: 30px;">
            <p>Visité nos page Facebook ou Email ou Twiter</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="entrer votre email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100083367339486" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Tim</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
        Designed by <a href="#">Geek squad</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>