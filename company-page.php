<?php /* Template Name: О компании */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cwrap
 */

get_header('page');
?>

        
       <?php get_template_part( 'content', 'company' );  ?>
       <div class="container-fluid company-bottom">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <h3>Обучим Ваш коллектив производить монтаж нашей продукции на объекте самостоятельно</h3>
                       <p>Вы будете уверены, что подрядчики сделают все Ваши работы по технологии CWrap. <b>В результате Вы получите</b> несущие способности конструкции, соответствующие запланированным расчетам проектировщика:</p>
                       <a href="#" class="button-line btn-download" data-toggle="modal" data-target="#formStudyModal">
                    <div class="button-line_icon">
                        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/download.png">
                    </div>
                    <div class="button-line__text">
                        закажите обучение персонала сейчас
                    </div>
                </a>
                   </div>
                   <div class="col-md-6">
                       <h3>Мы подобрали 7 проверенных подрядных организаций</h3>
                       <p>Готовых выслать Вам предложение по усилению объекта:</p>
                       <a href="#" class="button-line btn-download" data-toggle="modal" data-target="#form7Modal">
                    <div class="button-line_icon">
                        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/download.png">
                    </div>
                    <div class="button-line__text">
                        Получить 7 коммерческих предложений
                    </div>
                </a>
                    </div>
               </div>
               .
           </div>
       </div>
       <?php get_template_part( 'content', 'form' );  ?>
<?php
get_footer();
