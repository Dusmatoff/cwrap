<div class="container-fluid content-projects">
    <div class="block-title">
    <span>Проекты с применением системы усиления CWrap</span>
    </div>
    <div class="block-subtitle">
    <span>более 100 выполненнх проектов по всей России!</span>
    </div>
    <div class="container">
        <div class="projects-slider">
            <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                  query_posts('post_type=projects');   // указываем ID рубрик, которые необходимо вывести.
                  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                ?>
            <a href="<?php the_permalink(); ?>">
                <div class="projects-slider__item">
                    <?php 
                        $project_thumbnail = get_field('project_thumbnail'); 
                        $project_company_logo = get_field('project_company_logo'); 
                        
                        ?>
                    <div class="row project-top-info">
                        <div class="col-md-6">
                            <img src="<?php echo $project_thumbnail['url']; ?>" alt="" class="progects-slider__item__img img-fluid">
                        </div>
                        <div class="col-md-6 project-right-info">
                            <img src="<?php echo $project_company_logo['url']; ?>" alt="" class="projects-slider__item__logo">
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
        <a href="/projects/" class="button-line btn-glass btn-center">
            <div class="button-line_icon">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/glass.png">
            </div>
            <div class="button-line__text">
                Смотреть все проекты
            </div>
        </a>
    </div>
</div>