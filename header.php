<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Kross | Portfolio Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="<?php echo get_template_directory_uri(); ?>/image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="<?php echo get_template_directory_uri(); ?>/image/x-icon">

</head>

<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h3" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Myself"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <!-- <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.html">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul> -->
      <?php wp_nav_menu() ?>
    </div>
  </nav>
</header>