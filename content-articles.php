<div class="container-fluid articles gray-bg">
    
    
    <div class="block-title">
    <span>статьи</span>
    </div>
    <div class="block-subtitle">
    <span>кратко о том, про что пользователь может узнать<br>и как ему это может стать полезным</span>
    </div>
    
    <div class="container">
    <div class="articles__slider">
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
    <a href="/articles/" class="button-line btn-glass btn-center">
        <div class="button-line_icon">
            <img src="<?php  bloginfo("template_directory"); ?>/assets/img/glass.png">
        </div>
        <div class="button-line__text">
            смотреть все статьи
        </div>
    </a>
    </div>
    
</div>