<?php 
    $background_image_eins = get_sub_field('background_image_eins');
    $background_image_zwei = get_sub_field('background_image_zwei');
?>
<?php if(have_rows('testimonials')):?>
<div class="row row-testimonials mb-5 pb-5">
    <div class="col-7 col-testimonials-1" style="background-image:url('<?= wp_get_attachment_image_url($background_image_eins, 'large');?>');">
    </div>
    <div class="col-5 testimonial-bg" style="background-image:url('<?= wp_get_attachment_image_url($background_image_zwei, 'large');?>');">
        <div class="bg-white p-5 col-testimonials-2">
            <div id="carouselExample" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    <?php $loop = 1; ?>
                    <?php while ( have_rows( 'testimonials' ) ) :?>
                        <?php $testimonial_index = 1;?>
                        <div class="carousel-item<?php if($loop==1):?> active<?php endif;?>">
                            <?php while($testimonial_index<=3):?>
                                <div class="p fst-italic ms-3 mb-5 mt-5 pt-5 pb-5 me-5">
                                    <?php the_row(); $testimonial = get_sub_field('testimonial');?>
                                    <?= $testimonial; ?>
                                </div>
                                <?php $testimonial_index++;?>
                            <?php endwhile;?>
                        </div>
                        <?php $loop++;?>
                    <?php endwhile; ?>
                    </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>