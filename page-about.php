<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="kikuのポートフォリオサイトです。aboutページです。">

  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">  
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/mystyle.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/menu.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/switch.js"></script>

  <title>MyProfile</title>

<style type="text/css">
.page-about {
  display: flex;
  flex-direction: column;
}

.card-wrapper-1 {
  height: 500px;
}

#contact {
  background-image: url("<?php bloginfo('template_directory'); ?>/images/bluesea.jpeg");
  background-position: 5% 40%;
}

.contact-wrapper {
  margin-top: 50px;
}

</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container-outer">
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
  <?php endif; ?>
<div class="page-about">
<div class="main page-about1">
    <div class="content">
      <div class="cattitle">
        <h1>About<p>- kiku -</p></h1>
        <p>My Profile・ Contact</p>
      </div>
    </div>
    <div class="sidebar">
      <?php wp_nav_menu(array('theme_location' => 'sidebar')); ?>
    </div>
</div>
<div class="card-wrapper-1 page-about2">
<div class="card-wrapper-2 card is-surface">
  <div class="container card_surface">
    <div class="container1"></div>
    <div class="container2">
      <img src="<?php bloginfo('template_directory'); ?>/images/me2.png" alt="">
      <h2>My Profile</h2>
      <span>Webデザイナーになります！</span>
      <p>
        明治大学法学部卒。5年ほど主に東京のデータセンターでネットワークやサーバー周りのエンジニアに。その後地元沖縄に帰り別の業界で長い間従事。この度web制作に関わる仕事に就きたいと決心し今に到る。よろしくお願いします。
      </p>      
    </div>
    <div class="container3">
      <button class="switch">保有技術へ</button>
    </div>
  </div>
</div>
<div class="card-wrapper-2 card is-surface">
  <div class="container card_reverse">
    <div class="container1 reverse">
      <span>MyTech</span>
    </div>
    <div class="container2">
      <p>保有技術はHTML/CSS/SASS/Bootstrap/JS/Jquery/PHP/<br>
      WORDPRESS等です。
      インフラのエンジニア時にはネットワーク機器やLinux/MySQL/Oracle等にも触れてました。
      photoshopやxdも習得中。
      </p>

      <div class="container-icon">
        <div class="icon"><i class="fab fa-html5"></i></div>
        <div class="icon"><i class="fab fa-css3-alt"></i></div>
        <div class="icon"><i class="fab fa-js-square"></i></div>
        <div class="icon"><i class="fab fa-php"></i></div>
        <div class="icon"><i class="fab fa-wordpress"></i></div>
        <div class="icon"><i class="fab fa-adobe"></i></div>
      </div>
    </div>
    <div class="container3">
      <button class="switch reverse">プロフィールへ</button>
    </div>    
  </div>
</div>
</div>
    <div id="contact" class="big-bg page-about3">
      <div class="contact-wrapper">
      <p class="message">お問い合わせはメールフォームもしくはTwitter<span class="twittericon"><a href="https://twitter.com/kinky333"><i class="fab fa-twitter-square"></i></a></span>でお願いします。</p>

      <?php echo do_shortcode('[contact-form-7 id="125" title="コンタクトフォーム 1"]'); ?>

      <!-- <div class="twittericon">
        <a href="https://twitter.com/kinky333"><i class="fab fa-twitter-square"></i></a>
      </div> -->

        <!-- <h2 class="page-title">Contact</h2>
        <form action="<?php bloginfo('template_directory'); ?>/page-mail.php" method="post">
          <div>
            <label for="name">お名前</label>
            <input type="text" id="name" name="your-name" maxlength="255">
          </div>
          <div>
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="your-email" style="ime-mode:disabled" maxlength="255" size="30">
          </div>
          <div>
            <label for="message">メッセージ</label>
            <textarea id="message" name="your-message" cols="40" rows="5"></textarea>
          </div>
          <input type="submit" class="button" value="送信内容確認へ">
        </form> -->
      </div>
    </div>
</div>

<footer>
  <p>Copyright &copy; <?php bloginfo('name'); ?></p>
</footer>

</div>
</body>
</html>