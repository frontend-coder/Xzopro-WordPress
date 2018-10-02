<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xzopro
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Главная страница xzopro</title>
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 3 нижние строки Chrome, Firefox OS and Opera; Windows Phone; iOS Safari    -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">
  <style>
  html {background-color: #fff; }
  body { opacity: 0; overflow-x: hidden;}
</style>
<!-- <link rel="stylesheet" href="css/libs.min.css">
<link rel="stylesheet" href="css/main.min.css">  -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>images/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicon/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/favicon/mstile-144x144.png">
<meta name="theme-color" content="#5eaffa">
	<?php wp_head(); ?>
</head>
<body>
   <div id="my-wrapper">
      <div id="my-header">
       <header class="header_block" id="one_block">
        <div class="header_top">
          <div class="container">
            <div class="row">
              <div class="header_top_social">
                <div class="header_top_social_left">
                  <i class="flaticon-xzopro-placeholder"></i> <span>Мы работаем с 1985 года в Нью-Йорке</span>
                </div>
                <ul class="header_top_social_right">
                  <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                  <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                  <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                  <li> <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="top_line">
          <div class="container">
            <div class="row">
              <div class="top_line_block">
                <div class="top_line_box">
                  <div class="top_line_logo">
                  <?php if(ot_get_option('logo_upload')){?>
                    <img src="<?php echo ot_get_option('logo_upload'); ?>" alt="логотип">
					<?php } else { ?>
XPRO
					<?php } ?>
                  </div>
                </div>
                <div class="top_call_box">
                  <div class="top_call_box_item ">
                    <div class="tci_locate"> <i class="flaticon-xzopro-placeholder"></i></div>
                    <div class="tci_info">
                      <div class="tci_title">Ленинская слобода д.19 стр 1</div>
                      <div class="tci_descr">115280, Россия, Москва</div>
                    </div>
                  </div>
                  <div class="top_call_box_item">
                   <div class="tci_locate"> <i class="flaticon-xzopro-technology"></i></div>
                   <div class="tci_info">
                      <div class="tci_title">Ленинская слобода д.19 стр 1</div>
                      <div class="tci_descr">115280, Россия, Москва</div>
                  </div>
                </div>
                  <div class="top_call_box_item ">
                     <div class="tci_locate"> <i class="flaticon-xzopro-clock-1"></i></div>
                    <div class="tci_info">
                      <div class="tci_title">Ленинская слобода д.19 стр 1</div>
                      <div class="tci_descr">115280, Россия, Москва</div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="top_menu">
          <div class="container">
            <div class="row">
              <div class="top_menu_block">
                <div id="mainmenu">
                  <ul>
                    <!-- Пункт меню 1 -->
                    <li><a href="#one_block">главная</a></li>
                    <li class="parent"><a href="#about_us">о нас</a>
                      <ul>
                        <li><a href="/about-us.html" target="_blank">о нас</a></li>
                        <li><a href="/services.html" target="_blank">услуги</a></li>
                        <li><a href="/projects.html" target="_blank">проекты</a></li>
                        <li><a href="/contact.html" target="_blank">контакты</a></li>
                       <li><a href="/category.html" target="_blank">категория</a></li>
                         <li><a href="/single.html" target="_blank">пост</a></li>
                      </ul>
                    </li>
                    <li class="parent"><a href="#services">услуги</a>
                      <ul>
                        <li><a href="/services.html">первая страница услуги</a></li>
                        <li><a href="/services.html">вторая страница услуги</a></li>
                        <li><a href="/services.html">третья страница услуги</a></li>
                        <li class="parent"><a href="#">четвертая страница услуги</a>
                          <ul>
                            <li><a href="#">первая страница услуги</a></li>
                            <li><a href="#">вторая страница услуги</a></li>
                            <li><a href="#">третья страница услуги</a></li>
                            <li><a href="#">четвертая страница услуги</a></li>
                            <li><a href="#">пятая страница услуги</a></li>
                            <li><a href="#">шестая страница услуги</a></li>
                            <li><a href="#">седьмая страница услуги</a></li>
                          </ul>
                        </li>
                        <li><a href="#">пятая страница услуги</a></li>
                        <li><a href="#">шестая страница услуги</a></li>
                        <li><a href="#">седьмая страница услуги</a></li>
                      </ul>
                    </li>
                    <li><a href="#project">проекты</a></li>
                    <li><a href="#blog">блог</a></li>
                    <li><a href="#contact">контакты</a></li>
                  </ul>
                  <!-- Конец списка -->
                </div>
                <a href="#call-backtimer" class="mainbuttons"> получить  </a>
                <div class="mobile_gamburger">
                 <button id="my-icon" class="hamburger hamburger--arrowalt" type="button">
                   <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
<div class="hidden">
              <nav id="my-menu">
                <ul>
                  <li><a href="#one_block">главная</a></li>
                  <li><a href="#about_us">о нас</a>
                    <ul>
                      <li><a href="#">первый раздел</a></li>
                      <li><a href="#">второй раздел</a></li>
                      <li><a href="#">третий раздел</a></li>
                      <li><a href="#">четвертый раздел</a></li>
                      <li><a href="#">пятый раздел</a></li>
                    </ul>
                  </li>
                  <li><a href="#services">услуги</a>
                   <ul>
                    <li><a href="#">первая страница услуги</a></li>
                    <li><a href="#">вторая страница услуги</a></li>
                    <li><a href="#">третья страница услуги</a></li>
                    <li class="parent"><a href="#">четвертая страница услуги</a>
                      <ul>
                        <li><a href="#">первая страница услуги</a></li>
                        <li><a href="#">вторая страница услуги</a></li>
                        <li><a href="#">третья страница услуги</a></li>
                        <li><a href="#">четвертая страница услуги</a></li>
                        <li><a href="#">пятая страница услуги</a></li>
                        <li><a href="#">шестая страница услуги</a></li>
                        <li><a href="#">седьмая страница услуги</a></li>
                      </ul>
                    </li>
                    <li><a href="#">пятая страница услуги</a></li>
                    <li><a href="#">шестая страница услуги</a></li>
                    <li><a href="#">седьмая страница услуги</a></li>
                  </ul>
                </li>
                <li><a href="#">проекты</a></li>
                <li><a href="#">блог</a></li>
                <li><a href="#">контакты</a></li>
              </ul>
            </nav>
            </div>
            <!--онец мобильного меню -->
          </div>
        </div>
      </div>
    </div>
      </header>
</div>
