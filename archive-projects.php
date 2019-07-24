<?php /* Template Name: Проекты */ ?>
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
<div class="container">
    <div class="projects-list">
        <?php
            if ( have_posts() ) : // если имеются записи в блоге.
              query_posts('post_type=projects');   // указываем ID рубрик, которые необходимо вывести.
              while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
            ?>
        <a href="<?php the_permalink(); ?>">
            <div class="projects-list__item">
                <?php 
                    $project_thumbnail = get_field('project_thumbnail'); 
                    $project_company_logo = get_field('project_company_logo'); 
                    
                    ?>
                <div class="row project-top-info">
                    <div class="col-md-6">
                        <img src="<?php echo $project_thumbnail['url']; ?>" alt="" class="progects-slider__item__img img-fluid">
                    </div>
                    <div class="col-md-6 project-right-info">
                        <img src="<?php echo $project_company_logo['url']; ?>" alt="" class="projects-slider__item__logo img-fluid">
                        <p class="projects-slider__item__company"><?php the_title(); ?></p>
                        <span class="projects-slider__item__btn">подробнее</span>
                    </div>
                </div>
                <div class="projects-slider__item__task">
                    <span>Задача</span>
                    <p><?php the_field('project_task'); ?></p>
                </div>
                <div class="projects-slider__item__solution">
                    <span>Решение</span>
                    <p><?php the_field('project_solution'); ?></p>
                </div>
            </div>
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