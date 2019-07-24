<div class="container-fluid certificate" id="certificate">
    <div class="block-title">
    <span>Вся продукция сертифицирована</span>
    </div>
    <div class="block-subtitle">
    <span>Ваша служба безопасности оценит<br>белизну и прозрачность работы нашей компании</span>
    </div>
            <div class="container">
                <div class="cert-slider">
<?php if( have_rows('certificates', 'option') ): ?>

	<?php while( have_rows('certificates', 'option') ): the_row(); 

		// переменные
		$image = get_sub_field('certificate_pic', 'option');

		?>
        
		<a class="cert-slider__item" href="<?php echo $image['url']; ?>">
		    <!--<span class="zoom-icon" ></span>-->
		    <!--<img class="slick-zoom" src="<?php  bloginfo("template_directory"); ?>/assets/img/zoom.png">-->
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		</a>
		<!--<img class="slick-zoom" src="<?php  bloginfo("template_directory"); ?>/assets/img/zoom.png">-->
        
		


	<?php endwhile; ?>


<?php endif; ?>
                </div>
                <a href="<?php the_field('all_pack_document', 'option'); ?>" class="button-line btn-doc btn-center" data-toggle="modal" data-target="#formModal">
            <div class="button-line_icon">
                <img src="<?php  bloginfo("template_directory"); ?>/assets/img/download.png">
            </div>
            <div class="button-line__text">
                Скачать полный пакет документов
            </div>
        </a>
            </div>
        </div>