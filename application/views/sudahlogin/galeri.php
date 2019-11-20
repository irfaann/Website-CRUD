<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php //echo anchor('register','Daftar'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LAPI - Lembaga Anti-Pornografi Indonesia</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/agency.css">


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url()."index.php/Welcome/index"; ?>">BERANDA</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('index.php/Welcome/view_artikel'); ?>">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url()."index.php/Welcome/view_galeri"; ?>">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url()."index.php/Welcome/dashboard"; ?>#about">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url()."index.php/Welcome/view_bukutamu"; ?>">Buku Tamu</a>
          </li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php //echo base_url()."index.php/Welcome/logout"; ?>">Akun</a></td>

					  <ul class='menus'>
						  <a class="nav-link js-scroll-trigger" href='edit_data' title='Menus'>Edit</a></li>
						  <a class="nav-link js-scroll-trigger" href='delete_data'>Delete</a></li>
						  <a class="nav-link js-scroll-trigger" href='logout'>Log Out</a></li>

            </ul>

          </li>
        </ul>
      </div>
    </div>
  </nav>

  

  <!-- Services -->
  

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="galeri">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Galeri</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">         
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">               
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/galeri11.jpg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">         
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid"  src="<?php echo base_url('assets/img/portfolio/galeri2.jpg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/galeri3.jpg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid"  src="<?php echo base_url('assets/img/portfolio/galeri4.jpg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/galeri5.jpeg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/galeri6.jpg');?>" alt="">
          </a>
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/galeri7.jpg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/galeri8.jpg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/galeri9.jpg');?>" alt="">
          <div class="portfolio-caption">
          </div>
        </div>
      </div>
    </div>
    
  </section>

  
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/contact_me.js'); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('assets/js/agency.min.js'); ?>"></script>





</body>
</html>
