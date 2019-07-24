<?php
   /**
    * The header for our theme
    *
    * This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package cwrap
    */
   
   ?>
<!doctype html>
<html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="shortcut icon" href="<?php  bloginfo("template_directory"); ?>/assets/img/cwrap-logo.png" type="image/png">
      <title><?php the_title(); ?></title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php  bloginfo("template_directory"); ?>/assets/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="<?php  bloginfo("template_directory"); ?>/assets/slick/slick-theme.css"/>
      <link rel="stylesheet" type="text/css" href="https://mreq.github.io/slick-lightbox/dist/slick-lightbox.css"/>
      <link rel="stylesheet" href="<?php  bloginfo("template_directory"); ?>/style.css">
  <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <div class="container">
         <div class="row top-head">
            <div class="top-logo">
               <a href="/" class="top-head__logo">
               <img src="<?php  bloginfo("template_directory"); ?>/assets/img/cwrap-logo.png" alt="" >
               <span class="top-head__logotext">КАЛУЖСКИЙ ЗАВОД<br> УГЛЕРОДНЫХ ТКАНЕЙ</span>
               </a>
            </div>
            <div class="top-head__delivery">
               Оптовые поставки<br> <b>по всей России</b>
            </div>
            <div class="top-head__address">
               <a href="#" data-toggle="modal" data-target="#mapModal"><b>Склад в Москве:</b> <span id="address-text"><?php the_field('stock_moscow', 'option'); ?></span><span id="address-map">Смотреть на карте</span><br><b>График работы:</b> <?php the_field('work_hours', 'option'); ?></a>
            </div>
            <div class="top-head__social">
               <a href="<?php the_field('whatsapp_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/whatsapp.png"></a>
               <a href="<?php the_field('viber_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/viber.png"></a>
               <a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/telegram.png"></a>
               <a href="<?php the_field('skype_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/skype.png"></a>
            </div>
            <div class="top-head__contacts">
               <a href="tel:+74993488252" class="top-head__phone"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/phone.png"><?php the_field('cwrap_phone', 'option'); ?></a>
               <a href="mailto:info@kzut.ru" target="_blank">
                  <p class="top-head__email"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/envelope.png"><?php the_field('e-mail', 'option'); ?></p>
               </a>
            </div>
         </div>
      </div>
      <div class="container-fluid promo text-center">
         <?php 
            wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'menu'            => '', 
            'container'       => 'nav', 
            'container_class' => 'top-menu', 
            'container_id'    => '',
            'menu_class'      => 'top-menu', 
            'menu_id'         => 'top-menu',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
            ) );
        ?>
            <div class="burger-mobile">
                <a href="/" class="footer__logo">
                        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/footer-logo.png" alt="" >
                        <span class="footer__logotext">КАЛУЖСКИЙ ЗАВОД<br> УГЛЕРОДНЫХ ТКАНЕЙ</span>
                </a>
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/burger-icon.png" class="burger-icon">
            </div>
            <div class="mobile-menu">
                     <?php 
            wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'menu'            => '', 
            'container'       => 'nav', 
            'container_class' => 'burger-menu', 
            'container_id'    => '',
            'menu_class'      => '', 
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
            ) );
        ?>
            <div class="burger-divider"></div>
            <div class="top-head__contacts burger-contacts">
               <a href="tel:+74993488252" class="top-head__phone"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/phone.png"><?php the_field('cwrap_phone', 'option'); ?></a>
               <a href="mailto:info@kzut.ru" target="_blank">
                  <p class="top-head__email"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/envelope.png"><?php the_field('e-mail', 'option'); ?></p>
               </a>
            </div>
            <div class="top-head__social burger-contacts burger-social">
               <a href="<?php the_field('whatsapp_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/whatsapp.png"></a>
               <a href="<?php the_field('viber_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/viber.png"></a>
               <a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/telegram.png"></a>
               <a href="<?php the_field('skype_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/skype.png"></a>
            </div>
            <div class="burger-divider"></div>
            <p class="footer__copyright burger-contacts"><a href="https://palladiumlab.com/" target="_blank" class="copyright">Разработано в <img src="<?php  bloginfo("template_directory"); ?>/assets/img/logo_palladium.png" alt=""> <span class="palladiumlab">Palladiumlab 2019</span></a><br>
            <span class="gray">© Все права защищены</span></p>
            
        </div>
        
         <p class="promo__title"><span>Российское производство</span><br> углеродной ткани и эпоксидного клея</p>
         <p class="promo__subtitle">для усиления ЖБ конструкций<br> по японской технологии Toray Group</p>
         <p><img src="<?php  bloginfo("template_directory"); ?>/assets/img/arrow-down.png" alt="" class="promo__arrow"></p>
         <a href="#" data-toggle="modal" data-target="#formModal" class="button-line btn-headphone btn-center">
            <div class="button-line_icon">
               <img src="<?php  bloginfo("template_directory"); ?>/assets/img/headphone.png">
            </div>
            <div class="button-line__text">
               Заказать консультацию
            </div>
         </a>
         <div class="promo__items text-center">
            <span id="products-price-link" class="promo__item">
               <div class="promo__item__border"></div>
               <img src="<?php  bloginfo("template_directory"); ?>/assets/img/promo-icon-1.png" alt="" class="promo__item__icon">
               <p class="promo__item__text">Цена ниже рыночной<br>на 7-12%</p>
            </span>
            <span id="work-with-us-link" class="promo__item">
               <div class="promo__item__border"></div>
               <img src="<?php  bloginfo("template_directory"); ?>/assets/img/promo-icon-2.png" alt="" class="promo__item__icon">
               <p class="promo__item__text">Возможность уменьшения<br>сметы на усиление<br>(работы + материалы) на 10-30% </p>
            </span>
            <span id="certificate-link" class="promo__item">
               <div class="promo__item__border"></div>
               <img src="<?php  bloginfo("template_directory"); ?>/assets/img/promo-icon-3.png" alt="" class="promo__item__icon">
               <p class="promo__item__text">Качество углепластика<br>(клей + ткань)<br>подтверждено испытаниями МГСУ</p>
            </span>
         </div>
      </div>