<?php 
    $background_image_eins = get_sub_field('background_image_eins');
    $background_image_zwei = get_sub_field('background_image_zwei');
?>
<?php if(have_rows('testimonials')):?>
<div class="row row-testimonials mb-lg-5 pb-5">
    <div class="col-12 col-lg-7 col-testimonials-1" style="background-image:url('<?= wp_get_attachment_image_url($background_image_eins, 'large');?>');">
    </div>
    <div class="col-12 col-lg-5 testimonial-bg" style="background-image:url('<?= wp_get_attachment_image_url($background_image_zwei, 'large');?>');">
        <div class="bg-white p-4 p-lg-5 col-testimonials-2">
            <div id="carouselExampleDesktop" class="carousel carousel-dark slide mobile-hide">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDesktop" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDesktop" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div id="carouselExampleMobile" class="carousel carousel-dark slide desktop-hide">
                <div class="carousel-inner">
                    <?php $loop = 1; ?>
                    <?php while ( have_rows( 'testimonials' ) ) :?>
                        <div class="carousel-item<?php if($loop==1):?> active<?php endif;?>">
                            <div class="p fst-italic p-3">
                                <?php the_row(); $testimonial = get_sub_field('testimonial');?>
                                <?= $testimonial; ?>
                            </div>
                        </div>
                        <?php $loop++;?>
                    <?php endwhile; ?>
                    </div>
                <div class="carousel-indicators">
                    <?php $loop = 0;
                        $testimonials = get_sub_field('testimonials');
                        $slide = 1; ?>
                    <?php while ( $loop<count($testimonials) ) :?>
                        <button type="button" data-bs-target="#carouselExampleMobile" data-bs-slide-to="<?= $loop;?>" <?php if($loop==0):?>class="active" <?php endif;?>aria-current="true" aria-label="Slide <?= $slide;?>"></button>
                        <?php $loop++;?>
                        <?php $slide++;?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>