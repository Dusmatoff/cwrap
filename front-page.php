<?php /* Template Name: Главная страница */ ?>
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
    
    get_header();
    ?>
<div class="container-fluid projects gray-bg home-projects">
    <div class="block-title">
    <span>Проекты с применением системы усиления CWrap</span>
    </div>
    <div class="block-subtitle">
    <span>более 100 выполненнх проектов по всей России</span>
    </div>

    <div class="container">
        <div class="projects-slider">
            <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                  query_posts('post_type=projects');   // указываем ID рубрик, которые необходимо вывести.
                  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                ?>
            <a href="<?php the_permalink(); ?>" class="projects-slider__item">
                <div >
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
<div class="container-fluid products-price text-center" id="products-price">
    <div class="block-title">
    <span>Цены и характеристики</span>
    </div>
    <div class="block-subtitle">
    <span style="font-size: 16px; line-height: 26px;">наши цены ниже средней на рынке, при этом мы <br>готовы предложить материал с лучшими техническими<br> характеристиками</span>
    </div>
    <?php get_template_part( 'content', 'products' );  ?>
</div>
<div class="container-fluid we-choose">
    <div class="block-title">
    <span style="color: #fff;">Мы подобрали 7 проверенных подрядных организаций</span>
    </div>
    <div class="block-subtitle">
    <span style="color: #e72929;">готовых выслать Вам предложение<br> по усилению объекта</span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 align-middle">
                <p class="we-choose-left-title">Все толковые подрядчики под одной кнопкой</p>
                <a href="#" class="button-line btn-download" data-toggle="modal" data-target="#form7Modal">
                    <div class="button-line_icon">
                        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/download.png">
                    </div>
                    <div class="button-line__text">
                        Получить 7 коммерческих предложений
                    </div>
                </a>
                <p class="we-choose-left-subtitle">Если отделить стоимость материалов от стоимости работ, то можно <b>сэкономить до 30% бюджета</b> на усиление.</p>
            </div>
            <div class="col-sm-12 col-md-6 man">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/man.png">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid work-with-us" id="work-with-us">
    
    <div class="block-title">
    <span>Работа с нами позволит Вам сэкономить</span>
    </div>
    <div class="block-subtitle">
    <span>до 30% бюджета на усилении</span>
    </div>
    <div class="container">
    <div class="text-center">
        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/arrow-down.png">
    </div>
    <p class="work-with-us__subtitle2 text-center">Рассмотрим это на примере:</p>
    <div class="row">
        <div class="col-md-6 compare2">
            <p class="work-with-us__compare text-center">Без нас</p>
            <div class="without compare-list">Вы находите подрядчика на рынке и покупаете у него ткань, клей и услугу монтажа</div>
            <div class="without compare-list">Подрядчик делает наценку на материалы до 100% покупая их у нас или наших конкурентов</div>
            <div class="without compare-list">ФАКТ: среднерыночная цена усиления 10 000 руб/м<sup>2</sup></div>
        </div>
        <div class="col-md-6 compare2">
            <p class="work-with-us__compare text-center">С нами</p>
            <div class="with-us compare-list">Вы заказываете у нас материалы, а Мы находим для Вас подрядчика без наценок</div>
            <div class="with-us compare-list">Материалы для усиления из первых рук 3 000 - 4 000 руб/м<sup>2</sup><br>Работы по усилению без наценок 2 500 - 3 500 руб/м<sup>2</sup> </div>
            <div class="with-us compare-list red">Фактическая цена усиления 5 500 - 7 500 руб/м<sup>2</sup></div>
        </div>
    </div>
    <div class="text-center">
        <a href="#" class="button-line btn-start-work btn-center" data-toggle="modal" data-target="#formWorkModal">
            <div class="button-line_icon">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/headphone.png">
            </div>
            <div class="button-line__text">
                Начните работать с нами сегодня
            </div>
        </a>
    </div>
    </div>
</div>
<div class="container-fluid we-choose study">
    <div class="block-title">
    <span style="color: #fff;">Обучим Ваш коллектив производить монтаж</span>
    </div>
    <div class="block-subtitle">
    <span style="color: #e72929;">нашей продукции на объекте самостоятельно</span>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 man">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/men.png">
            </div>
            <div class="col-md-6 align-middle">
                <p class="we-choose-left-title">Вы будете уверены, что подрядчики сделают все Ваши работы по технологии CWrap</p>
                <p class="we-choose-left-subtitle">В результате Вы получите несущие способности конструкции, соответствующие запланированным расчетам проектировщика.</p>
                <a href="#" class="button-line btn-download" data-toggle="modal" data-target="#formStudyModal">
                    <div class="button-line_icon">
                        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/download.png">
                    </div>
                    <div class="button-line__text">
                        закажите обучение персонала сейчас
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'content', 'company' );  ?>
<?php get_template_part( 'content', 'certificates' );  ?>
<div class="container-fluid articles">
    
    
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
<?php get_template_part( 'content', 'form' );  ?>
<?php
get_footer();