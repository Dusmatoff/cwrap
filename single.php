<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cwrap
 */

get_header('page');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="container big-slider-block">
	    <div class="row">
	        <div class="col-md-9">
	            <div class="slider big-slider-for">
                    <?php if( have_rows('big_article_slider') ): ?>
                    <?php while( have_rows('big_article_slider') ): the_row(); 
                        // переменные
                        $image = get_sub_field('big_article_slider_img');
                        
                        ?>
                    <div class="big-slider-for__item zoom1" data-src="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                
	       </div>
	        <div class="col-md-3">
	            <div class="slider big-slider-nav">
                    <?php if( have_rows('big_article_slider') ): ?>
                    <?php while( have_rows('big_article_slider') ): the_row(); 
                        // переменные
                        $image = get_sub_field('big_article_slider_img');
                        
                        ?>
                    <div class="big-slider-nav__item"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
	        </div>
	    </div>
	</div>
<?php get_template_part( 'content', 'articles' );  ?>
<?php get_template_part( 'content', 'form' );  ?>
<?php
get_footer();
