

<!DOCTYPE html>
<html <?php language_attributes();?>>
   <head>
      <title><?php bloginfo('title')?></title>
      <meta charset="<?php bloginfo('charset')?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/animate.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/flaticon.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css">

      <?php wp_head()?>
   </head>
   <body>
      <div class="wrap">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="bg-wrap">
                     <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                           <p class="mb-0 phone pl-md-2">
                              <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
                              <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
                           </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                           <div class="social-media">
                              <p class="mb-0 d-flex">
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
         <div class="container">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Asset Advise</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                  <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                  <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- END nav -->