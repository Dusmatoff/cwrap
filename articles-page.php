<?php /* Template Name: Статьи */ ?>
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

        
        <div class="container articles">
            <div class="articles__list">

<?php
if ( have_posts() ) : // если имеются записи в блоге.
  query_posts('cat=3');   // указываем ID рубрик, которые необходимо вывести.
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>
<a href="<?php the_permalink(); ?>" class="articles__slider__item">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    <p class="article__title text-center"><?php the_title(); ?></p>
    <div class="article__desc text-center"><?php the_field('article_short_desc'); ?></div>
</a>
  <?php endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();                
?>
                
            </div>
        </div>
<?php
get_footer();
