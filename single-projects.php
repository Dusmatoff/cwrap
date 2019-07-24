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

	<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		?>


	</div><!-- #primary -->
	<div class="container-fluid form">
	    
	    <div class="block-title">
    <span style="color: #fff;">Бесплатно вызвать инженера на объект для обследования</span>
    </div>
	    <div class="container">
	        <?php echo do_shortcode('[contact-form-7 id="154" title="Форма на странице проекты"]'); ?>
	    </div>
	</div>
	
	<div class="container big-slider-block">
	    <div class="row">
	        <div class="col-md-9">
	            <div class="slider big-slider-for">
                    <?php if( have_rows('big_project_slider') ): ?>
                    <?php while( have_rows('big_project_slider') ): the_row(); 
                        // переменные
                        $image = get_sub_field('big_project_slider_img');
                        
                        ?>
                    <a class="big-slider-for__item" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                
	       </div>
	        <div class="col-md-3">
	            <div class="slider big-slider-nav">
                    <?php if( have_rows('big_project_slider') ): ?>
                    <?php while( have_rows('big_project_slider') ): the_row(); 
                        // переменные
                        $image = get_sub_field('big_project_slider_img');
                        
                        ?>
                    <div class="big-slider-nav__item"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
	        </div>
	    </div>
	</div>
<?php get_template_part( 'content', 'certificates' );  ?>
<?php get_template_part( 'content', 'projects' );  ?>
<?php
get_footer();
