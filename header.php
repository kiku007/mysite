<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="。kikuのポートフォリオサイトですweb,photo,aboutから成ります。">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@kinky333" />
  <meta property="og:url" content="http://www.kikupj.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="MyPortfolio-kiku-">
  <meta property="og:description" content="kikuのポートフォリオサイトです。">
  <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/ogmyportfolio.png">
  <title><?php bloginfo('name'); ?><?php wp_title(':'); ?></title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"> 
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_directory'); ?>/menu.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/switch.js"></script>
  
  <?php if(is_home()): ?>  
  <style type="text/css">
   .home .main {
     background-image: url(<?php bloginfo('template_directory'); ?>/images/NY02.png);
     background-size: cover;
     background-position: center;
     /* height: 100vh; */
   }

   .home .main h1 {
     color: white;
   }

   .home .main h1 p {
     font-size: 1rem;
   }

   .home .main .sidebar {
     background: none;
   }
   </style>
  <?php endif; ?>


  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container-outer menu-outer">
  <?php if(!is_home()): ?>  
    <header>
       <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </header>
       <div class="ham" id="ham">
         <span class="ham_line ham_line1"></span>
         <span class="ham_line ham_line2"></span>
         <span class="ham_line ham_line3"></span>
       </div>  
       <div class="menu_wrapper" id="menu_wrapper">
         <div class="menu_in">
           <ul>
             <?php wp_nav_menu(array('theme_location' => 'sidebar')); ?>
           </ul>
         </div>
       </div>
    <!-- <script src="<?php bloginfo('template_directory'); ?>/menu.js"></script> -->
  <?php endif; ?>