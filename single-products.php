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
<div class="container single-product">
    <div class="row">
        <div class="col-md-4 single-product__img text-center">
            <img src="<?php the_post_thumbnail_url(); ?>">
        </div>
        <div class="col-md-8 single-product__info">
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
            <p><?php the_field('short_desc_product'); ?></p>
            <p><?php the_field('long_desc_products'); ?></p>
            <div class="products__item__prices product-prices">
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
            <div class="product-links">
                <a href="<?php the_field('passport_product') ?>" class="products__item__links__pdf product-pdf">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/pdf.png">Паспорт<br> продукта
                </a>
                <a href="#" data-toggle="modal" data-target="#formModal" class="button-line btn-cart">
                    <div class="button-line_icon">
                        <img src="<?php  bloginfo("template_directory"); ?>/assets/img/cart.png">
                    </div>
                    <div class="button-line__text">
                        Заказать
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'content', 'certificates' );  ?>
<div class="container-fluid products-price text-center" id="products-price">
    <div class="block-title">
    <span>Посмотрите остальные наши продукты</span>
    </div>
    <div class="block-subtitle">
    <span>наши цены ниже средней на рынке, при этом мы  <br>готовы предложить материал с лучшими техническими<br> характеристиками</span>
    </div>
    <?php get_template_part( 'content', 'products' );  ?>
</div>

<?php
get_footer();