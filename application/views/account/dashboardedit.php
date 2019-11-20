<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>  
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LAPI</title>

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
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url()."index.php/Welcome/dashboard"; ?>">Beranda</a></td>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <!--<div class="intro-text">-->
        <!--<div class="intro-lead-in">Welcome To Our Studio!</div>-->
        <!--<div class="intro-heading text-uppercase">It's Nice To Meet You</div>-->
        <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>-->
      </div>
    </div>
  </header>
	<header class="masthead">
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">Halaman Log In</div>Akun telah diedit silakan Log In kembali<br><br>
				<?php
					// Cetak jika ada notifikasi
					if($this->session->flashdata('sukses')) {
						echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
					}
				?>

<form method="post"action="<?php echo base_url()."index.php/Welcome/login"; ?>">
				<p>Username:</p>
				<p><input type="text" name="username" /></p>
				<p> <?php echo form_error('username'); ?> </p>

				<p>Password:</p>
				<p><input type="password" name="password" /></p>
				<p> <?php echo form_error('password'); ?> </p>

				<p><input type="submit" name="btnSubmit" value="Login" /></p>

        </form>
Belum punya akun? Yuk <a class="nav-link js-scroll-trigger" href="<?php echo base_url()."index.php/Welcome/add_data"; ?>">Daftar</a></td>

			</div>
		</div>
	</header>
	
</body>
</html>
