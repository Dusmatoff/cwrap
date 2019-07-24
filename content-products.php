<div class="container">
        <div class="products">
            <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                  query_posts('post_type=products');   // указываем ID рубрик, которые необходимо вывести.
                  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                ?>
            <div class="products__item">
                <?php 
                    $price_pm_old = get_field('price_pm_old'); 
                    $price_pm_new = get_field('price_pm_new');
                    
                    $price_m_old = get_field('price_m_old'); 
                    $price_m_new = get_field('price_m_new');
                    
                    $price_upak_old = get_field('price_upak_old'); 
                    $price_upak_new = get_field('price_upak_new');
                    
                    $price_kg_old = get_field('price_kg_old'); 
                    $price_kg_new = get_field('price_kg_new');
                    
                    $price_compl_old = get_field('price_compl_old'); 
                    $price_compl_new = get_field('price_compl_new');
                    
                    $price_meshok_old = get_field('price_meshok_old'); 
                    $price_meshok_new = get_field('price_meshok_new');
                    ?>
                <div class="products__item__img"><img src="<?php the_post_thumbnail_url(); ?>"></div>
                <p class="products__item__title"><?php the_title(); ?></p>
                <p class="products__item__desc"><?php the_field('short_desc_product'); ?></p>
                <div class="products__item__prices">
                    <?php if($price_pm_old || $price_pm_new) { ?>
                    <div class="products__item__prices__one">
                        <p class="old-price"><del><?php the_field('price_pm_old') ?></del></p>
                        <p class="new-price"><?php the_field('price_pm_new') ?></p>
                        <p class="price-type">руб/пм</p>
                    </div>
                    <?php } ?>
                    <?php if($price_m_old || $price_m_new) { ?>
                    <div class="products__item__prices__two">
                        <p class="old-price"><del><?php the_field('price_m_old') ?></del></p>
                        <p class="new-price"><?php the_field('price_m_old') ?></p>
                        <p class="price-type">руб/м<sup>2</sup></p>
                    </div>
                    <?php } ?>
                    <?php if($price_upak_old || $price_upak_new) { ?>
                    <div class="products__item__prices__three">
                        <p class="old-price"><del><?php the_field('price_upak_old') ?></del></p>
                        <p class="new-price"><?php the_field('price_upak_new') ?></p>
                        <p class="price-type">руб/упак.</p>
                    </div>
                    <?php } ?>
                    <?php if($price_kg_old || $price_kg_new) { ?>
                    <div class="products__item__prices__three">
                        <p class="old-price"><del><?php the_field('price_kg_old') ?></del></p>
                        <p class="new-price"><?php the_field('price_kg_new') ?></p>
                        <p class="price-type">руб/кг</p>
                    </div>
                    <?php } ?>
                    <?php if($price_compl_old || $price_compl_new) { ?>
                    <div class="products__item__prices__three">
                        <p class="old-price"><del><?php the_field('price_compl_old') ?></del></p>
                        <p class="new-price"><?php the_field('price_compl_new') ?></p>
                        <p class="price-type">руб/компл.</p>
                    </div>
                    <?php } ?>
                    <?php if($price_meshok_old || $price_meshok_new) { ?>
                    <div class="products__item__prices__three">
                        <p class="old-price"><del><?php the_field('price_meshok_old') ?></del></p>
                        <p class="new-price"><?php the_field('price_meshok_new') ?></p>
                        <p class="price-type">руб/мешок</p>
                    </div>
                    <?php } ?>
                </div>
                <div class="products__item__links">
                    <a href="<?php the_field('passport_product') ?>" target="_blank" class="products__item__links__pdf">
                    <img src="<?php  bloginfo("template_directory"); ?>/assets/img/pdf.png">Паспорт<br> продукта
                    </a>
                    <a href="<?php the_permalink(); ?>" class="red__btn text-center">подробнее</a>
                </div>
            </div>
            <?php endwhile;  // завершаем цикл.
                endif;
                /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
                wp_reset_query();                
                ?>
        </div>
        <div class="products-icons">
            <div class="products-icons__item">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/products-icon1.png">
                <p>Выгодная стоимость</p>
            </div>
            <div class="products-icons__item">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/products-icon2.png">
                <p>Прекрасные<br> теплоизоляционные<br> свойства сырья</p>
            </div>
            <div class="products-icons__item">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/products-icon3.png">
                <p>Высокая прочность,<br> тепло- и коррозионная<br> стойкость материала</p>
            </div>
            <div class="products-icons__item">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/products-icon4.png">
                <p>Пожаробезопасность</p>
            </div>
            <div class="products-icons__item">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/products-icon5.png">
                <p>Неподверженность<br> влиянию химических<br> реагентов</p>
            </div>
        </div>
        <p class="products-text"><b>Компания «КЗУТ» производит высококачественное углеволокно</b> для усиления конструкций и изделий в разных отраслях промышленности. Мы также доставляем материалы своим покупателям по всей территории России. Если вы хотите недорого купить карбоновое волокно, отвечающее всем стандартам, звоните по телефону на сайте.</p>
    </div>