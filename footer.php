<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package cwrap
     */
    
    ?>
<div class="container-fluid map map1">
    <div class="map-contact">
        <div class="map-contact__address" id="map-stock">
            <b>Склад в Москве:</b> <?php the_field('stock_moscow', 'option'); ?><br><b>График работы:</b> <?php the_field('work_hours', 'option'); ?>
        </div>
        <br>
        <div class="map-contact__address2" id="map-fabric">
            <b>Завод:</b> <?php the_field('fabric', 'option'); ?>
        </div>
        <div class="divider-line"></div>
        <div class="top-head__contacts">
            <a href="tel:+74993488252" class="top-head__phone"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/phone.png"><?php the_field('cwrap_phone', 'option'); ?></a>
            <a href="mailto:info@kzut.ru" target="_blank">
                <p class="top-head__email"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/envelope.png"><?php the_field('e-mail', 'option'); ?></p>
            </a>
        </div>
        <div class="map-contact__social">
            <a href="<?php the_field('whatsapp_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/whatsapp.png"></a>
            <a href="<?php the_field('viber_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/viber.png"></a>
            <a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/telegram.png"></a>
            <a href="<?php the_field('skype_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/skype.png"></a>
        </div>
    </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aad0c4c06f24bd64e81d29b72c6d0c3c29c8da360aa707674efa41c3134f77e6f&amp;width=100%25&amp;height=530&amp;lang=ru_RU&amp;scroll=true"></script>

</div>

<div class="container-fluid map map2">
    <div class="map-contact">
        <div class="map-contact__address2" id="map-stock2">
            <b>Склад в Москве:</b> <?php the_field('stock_moscow', 'option'); ?><br><b>График работы:</b> <?php the_field('work_hours', 'option'); ?>
        </div>
        <br>
        <div class="map-contact__address" id="map-fabric">
            <b>Завод:</b> <?php the_field('fabric', 'option'); ?>
        </div>
        <div class="divider-line"></div>
        <div class="top-head__contacts">
            <a href="tel:+74993488252" class="top-head__phone"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/phone.png"><?php the_field('cwrap_phone', 'option'); ?></a>
            <a href="mailto:info@kzut.ru" target="_blank">
                <p class="top-head__email"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/envelope.png"><?php the_field('e-mail', 'option'); ?></p>
            </a>
        </div>
        <div class="map-contact__social">
            <a href="<?php the_field('whatsapp_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/whatsapp.png"></a>
            <a href="<?php the_field('viber_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/viber.png"></a>
            <a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/telegram.png"></a>
            <a href="<?php the_field('skype_link', 'option'); ?>" target="_blank"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/skype.png"></a>
        </div>
    </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A09c415fc6e9658ee5ad5c8a21b325e830a59a371fca255714181f5683dea4584&amp;width=100%25&amp;height=530&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/" class="footer__logo">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/footer-logo.png" alt="" >
                <span class="footer__logotext">КАЛУЖСКИЙ ЗАВОД<br> УГЛЕРОДНЫХ ТКАНЕЙ</span>
                </a>
            </div>
            <div class="col-md-6 text-right">
            </div>
        </div>
    </div>
</div>
<div class="video-alert alert alert-dismissible" id="video-alert">
    <a href="#" data-toggle="modal" data-target="#videoModal" class="video-alert-block">
        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/youtube.png" style="margin-right: 20px;"> 
        <p class="video-alert-title"><span class="video-first-title">Испытания материалов<br> в лаборатории<br></span> <span class="video-second-title">3 мин 41 сек</span></p>
    </a>
    <a href="#" class="video-alert-close"  data-dismiss="alert" aria-label="close"><img src="<?php  bloginfo("template_directory"); ?>/assets/img/close.png"></a>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php  bloginfo("template_directory"); ?>/assets/slick/slick.min.js"></script>
<script type="text/javascript" src="https://mreq.github.io/slick-lightbox/dist/slick-lightbox.js"></script>


<!-- Modal Map -->
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close map-close" data-dismiss="modal" aria-label="Close">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/map-close.png">
                </button>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aad0c4c06f24bd64e81d29b72c6d0c3c29c8da360aa707674efa41c3134f77e6f&amp;width=100%25&amp;height=530&amp;lang=ru_RU&amp;scroll=true"></script>
                
            </div>
        </div>
    </div>
</div>
<!-- Modal Map -->
<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/close.png">
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">Испытание материалов в лабораторий</h3>
                <iframe width="100%" height="700px" src="https://www.youtube.com/embed/Sirh1yyhb9s?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal -->

<!-- Modal Form -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/close.png">
                </button>
                <div class="block-title">
    <span>Заполните форму ниже</span>
    </div>
    <div class="block-subtitle">
    <span>и мы свяжемся с Вами в ближайшее время</span>
    </div>
                <?php echo do_shortcode('[contact-form-7 id="153" title="Форма"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form -->

<!-- Modal Form Получить 7 коммерческих предложений-->
<div class="modal fade" id="form7Modal" tabindex="-1" role="dialog" aria-labelledby="form7ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/close.png">
                </button>
                <div class="block-title">
    <span>Заполните форму ниже</span>
    </div>
    <div class="block-subtitle">
    <span>и мы свяжемся с Вами в ближайшее время</span>
    </div>
                <?php echo do_shortcode('[contact-form-7 id="155" title="Получить 7 коммерческих предложений"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form Получить 7 коммерческих предложений-->

<!-- Modal Form Начните работать с нами сегодня-->
<div class="modal fade" id="formWorkModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/close.png">
                </button>
                <div class="block-title">
    <span>Заполните форму ниже</span>
    </div>
    <div class="block-subtitle">
    <span>и мы свяжемся с Вами в ближайшее время</span>
    </div>
                <?php echo do_shortcode('[contact-form-7 id="156" title="Начните работать с нами сегодня"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form Начните работать с нами сегодня -->

<!-- Modal Form Закажите обучение персонала сейчас-->
<div class="modal fade" id="formStudyModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/close.png">
                </button>
                <div class="block-title">
    <span>Заполните форму ниже</span>
    </div>
    <div class="block-subtitle">
    <span>и мы свяжемся с Вами в ближайшее время</span>
    </div>
                <?php echo do_shortcode('[contact-form-7 id="157" title="Закажите обучение персонала сейчас"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form Закажите обучение персонала сейчас -->


<!-- Modal Form Success -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/close.png">
                </button>
                <div class="block-title">
    <span>Спасибо!<br> Ваша заявка отправлена</span>
    </div>
    <div class="block-subtitle">
    <span>Мы скоро ответим вам</span>
    </div>
                <img src="<?php bloginfo("template_directory"); ?>/assets/img/success-icon.png" style="margin-top: 30px;">
                <div class="top-logo logo-modal">
               <a href="/" class="top-head__logo">
               <img src="<?php  bloginfo("template_directory"); ?>/assets/img/cwrap-logo.png" alt="" >
               <span class="top-head__logotext">КАЛУЖСКИЙ ЗАВОД<br> УГЛЕРОДНЫХ ТКАНЕЙ</span>
               </a>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form Success-->


<script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
         if ( '153' == event.detail.contactFormId ) { // Change 123 to the ID of the form 
         jQuery('#formModal').modal('hide');
         jQuery('#successModal').modal('show'); //this is the bootstrap modal popup id
       }
        }, false );
</script>

<script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
         if ( '155' == event.detail.contactFormId ) { // Change 123 to the ID of the form 
         jQuery('#form7Modal').modal('hide');
         jQuery('#successModal').modal('show'); //this is the bootstrap modal popup id
       }
        }, false );
</script>

<script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
         if ( '156' == event.detail.contactFormId ) { // Change 123 to the ID of the form 
         jQuery('#formWorkModal').modal('hide');
         jQuery('#successModal').modal('show'); //this is the bootstrap modal popup id
       }
        }, false );
</script>

<script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
         if ( '157' == event.detail.contactFormId ) { // Change 123 to the ID of the form 
         jQuery('#formStudyModal').modal('hide');
         jQuery('#successModal').modal('show'); //this is the bootstrap modal popup id
       }
        }, false );
</script>

<script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
         if ( '115' == event.detail.contactFormId ) { // Change 123 to the ID of the form 
         jQuery('#successModal').modal('show'); //this is the bootstrap modal popup id
       }
        }, false );
</script>

<script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
         if ( '154' == event.detail.contactFormId ) { // Change 123 to the ID of the form 
         jQuery('#successModal').modal('show'); //this is the bootstrap modal popup id
       }
        }, false );
</script>

<script>
    $("#products-price-link").click(function() {
    $('html, body').animate({
        scrollTop: $("#products-price").offset().top
    }, 2000);
});

$("#work-with-us-link").click(function() {
    $('html, body').animate({
        scrollTop: $("#work-with-us").offset().top
    }, 2000);
});

$("#certificate-link").click(function() {
    $('html, body').animate({
        scrollTop: $("#certificate").offset().top
    }, 2000);
});
</script>
<script>
     $( "#map-fabric" ).click(function() {
      $( ".map1" ).hide();
      $( ".map2" ).show();
      
    });
</script>
<script>
     $( "#map-stock2" ).click(function() {
      $( ".map2" ).hide();
      $( ".map1" ).show();
      
    });
</script>

<script>
    $('.projects-slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    	
            
</script>
<script>
    $('.cert-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
    {
    breakpoint: 1025,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
    }
    },
    {
    breakpoint: 970,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 2
    }
    },
    {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
    }
    ]
    });
</script>
<script>
    $('.cert-slider').slickLightbox({
    itemSelector        : 'a',
    navigateByKeyboard  : true
    });
</script>
<script>
    $('.articles__slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
    {
    breakpoint: 1024,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 2
    }
    },
    {
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 2
    }
    },
    {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
    }
    ]
    });
</script>
<script>
    $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    vertical: true,
    cssEase: 'linear'
    });
</script>
<script>
    $('.slider-for-horizontal').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
    });
    $('.slider-nav-horizontal').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    cssEase: 'linear'
    });
</script>
<script>
    $('.big-slider-for').slick({
        autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.big-slider-nav'
    });
    $('.big-slider-nav').slick({
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.big-slider-for',
    dots: false,
    focusOnSelect: true,
    vertical: true
    });
</script>
<script>
    $('.big-slider-for').slickLightbox({
    itemSelector        : 'a',
    navigateByKeyboard  : true
    });
</script>
<script>
    $('.slider-for').slickLightbox({
    itemSelector        : 'a',
    navigateByKeyboard  : true
    });
</script>
<script>
    $('.slider-for-horizontal').slickLightbox({
    itemSelector        : 'a',
    navigateByKeyboard  : true
    });
</script>
<script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("top-menu");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
</script>
<script>
    videoAlert = document.getElementById("video-alert");
    
    var myScrollFunc = function () {
        var y = window.scrollY;
        if (y >= 700) {
            videoAlert.className = "video-alert alert alert-dismissible show";
            //$( ".video-alert" ).toggle( "slow" );
        } else {
            videoAlert.className = "video-alert alert alert-dismissible hide"
        }
    };
    
    window.addEventListener("scroll", myScrollFunc);
            
</script>
<script>
    $( ".burger-icon" ).click(function() {
      $( ".mobile-menu" ).toggle( "slow" );
      var src = ($(this).attr('src') === 'http://cwrap.palladiumlab.site/wp-content/themes/cwrap/assets/img/burger-icon.png')
                ? 'http://cwrap.palladiumlab.site/wp-content/themes/cwrap/assets/img/cancel.png'
                : 'http://cwrap.palladiumlab.site/wp-content/themes/cwrap/assets/img/burger-icon.png';
             $(this).attr('src', src);
    });
</script>
<script>
  $("#videoModal").on('hidden.bs.modal', function (e) {
        $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
    });
  </script>
  <script>
      $(function() {
// OPACITY OF BUTTON SET TO 0%
$(".zoom-icon").css("opacity","0");
 
// ON MOUSE OVER
$(".zoom-icon").hover(function () {
 
// SET OPACITY TO 70%
$(this).stop().animate({
opacity: .7
}, "fast");
},
  </script>

<?php wp_footer(); ?>
</body>
</html>