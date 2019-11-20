<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>  
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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">LAPI</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Buku Tamu</a>
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

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Selamat Datang Di LAPI </div>
        <div class="intro-heading text-uppercase">Lembaga Anti-Pornografi Indonesia</div>
        <div >Anda Login sebagai <?php echo ucfirst($this->session->userdata('username')); ?></div>
        <br><br>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Artikel</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
          <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/1.jpg'); ?>" alt="">
          </span>
          <br><br><br><br><br>

          <h4 class="service-heading"><a href="<?php echo base_url('index.php/Welcome/artikel1'); ?>">Mendeteksi Anak Kecanduan Pornografi</a></h4>
          <p class="text-muted">Tanda-tanda anak atau remaja yang mengalami kecanduan pornografi tidak sepenuhnya kasat mata. Para orang tua wajib mewaspadai tanda-tanda tersebut supaya dapat segera dilakukan penanganan dan pencegahan...</p>
        </div>
        <div class="col-md-4">
        
          <span class="fa-stack fa-4x">
          <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/2.png'); ?>" alt="">
          </span>
          <br><br><br><br><br>

          <h4 class="service-heading"><a href="<?php echo base_url('index.php/Welcome/artikel'); ?>">Dampak Pornografi Terhadap Kesehatan Mental</a></h4>
          <p class="text-muted">Ketika seorang anak terpapar pornografi, maka ia akan mengalami kerusakan pada beberapa bagian otaknya.
Hal ini serupa dengan yang terjadi bila anak mengalami benturan fisik seperti tabrakan hebat, atau kecanduan narkotika dan zat adiktif...
</p>
        </div>
        <div class="col-md-4 portfolio-item">
        
          <span class="fa-stack fa-4x">
          <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/6.jpg'); ?>" alt="">
          
          </span>
          <br><br><br><br><br>
          <h4 class="service-heading"><a href="<?php echo base_url('index.php/Welcome/artikelcp'); ?>">Tips Untuk Stop kecanduan Pornografi</a></h4>
          <p class="text-muted">Menurut dokter dan psikolog, nonton film berbau pornografi memiliki efek yang sama dengan narkoba, yaitu bisa membuat penggunanya jadi kecanduan berat.
	        Bila seseorang sudah kecanduan, sangat berat sekali untuk menghilangkannya...
            </p>
        </div>
      </div>
      <br><br>
      <div class="col-lg-12 text-center"><a href="<?php echo base_url('index.php/Welcome/view_artikel'); ?>">Lihat Artikel Lainnya... </a></div>

    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Galeri</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#">
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/penyuluhan1.png'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#">
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/penyuluhan6.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#">
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/penyuluhan3.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#">
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/penyuluhan4.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="<?php echo base_url('assets/img/portfolio/penyuluhan5.jpeg'); ?>">
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/penyuluhan5.jpeg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#">
            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/penyuluhan2.jpg'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center"><a href="<?php echo base_url('index.php/Welcome/view_galeri'); ?>">Lihat Lebih Banyak... </a></div>

    </div>
  </section>

  <!-- About -->
  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Kegiatan Penyuluhan</h2>
          <h3 class="section-subheading text-muted">Daftar penyuluhan yang akan datang</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/about/hivaids.jpg'); ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Penyuluhan Tentang Bahaya HIV/AIDS</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Kami akan menjelaskan berbagai macam bahaya seks bebas yang berdampak HIV/AIDS,dikarenakan pengidap HIV/AIDS di indonesia semakin meningkat. </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/about/sanglah.jpg'); ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Jumat,26 Juli 2019</h4>
                  <h4 class="subheading">Denpasar,Bali</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Penyuluhan ini akan bertempat di RSUP Sanglah Denpasar</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/about/cp.jpg'); ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Contact Person</h4>
                  <h5 class="subheading">081272732873</h5>
                </div>
                <div class="timeline-body">
                <p class="text-muted">Silahkan hubungi kami jika anda membutuhkan bantuan.</p>
                </div>
              </div>
            </li>

            <div class="col-lg-12 text-center">Anda Telah Terdaftar Dengan Kode Pendaftaran : <?php echo $id_pendaftaran; ?> </div>
        </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <!-- Clients -->

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Buku Tamu</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group"></div>
        </div>

        <div class="col-lg-8 text-center">
          <form 
          method="post" action="<?php echo base_url()."index.php/Welcome/add_bukutamu"; ?>">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" id="komentar" name="komentar" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <input id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" value="Kirim Pesan">
              </div>
            </div>
          </form>
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url()."index.php/Welcome/view_bukutamu"; ?>">View Buku Tamu</a></td>

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

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
