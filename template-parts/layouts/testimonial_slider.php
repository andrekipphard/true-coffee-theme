
<?php
  $titel = get_sub_field('titel');
?>
<div class="row mt-lg-5 pt-lg-5 mb-5 mb-lg-0">
  <div class="col mt-5">
    <div class="h2 text-center mb-lg-5">
      <?= $titel; ?>
    </div>

    <div id="carouselExampleIndicators" class="carousel carousel-dark slide text-center mt-3 mt-lg-5 pt-lg-5" data-bs-ride="true">
      
      <div class="carousel-inner">
        <?php if( have_rows('testimonial')):
                    $count = 0;
                    $slide = 1;
                    while( have_rows('testimonial')): the_row();
                    $name = get_sub_field('name');
                    $beschreibung = get_sub_field('beschreibung');


        ?>
          <?php if($count == 0):?>

            <div class="carousel-item active">
              <div class="p mb-5">
                <?= $beschreibung; ?>
              </div>
              <div class="h5">
                <?= $name; ?>
              </div>
            </div>

          <?php else:?>

            <div class="carousel-item">
              <div class="p mb-5">
                <?= $beschreibung; ?>
              </div>
              <div class="h5">
                <?= $name; ?>
              </div>
            </div>
          <?php endif; 
          $count +=1;
          $slide += 1;?>

        <?php endwhile; ?>
        <?php endif; ?>
            

      </div>

      <div class="carousel-indicators">
        <?php if( have_rows('testimonial')):
                      $count = 0;
                      $slide = 1;
                      while( have_rows('testimonial')): the_row();
                      $name = get_sub_field('name');
                      $beschreibung = get_sub_field('beschreibung');

        ?>
            <?php if ( $count == 0):?>

              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

            <?php else:?>

              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $count ?>" aria-label="<?= "Slide ".$slide;?>"></button>

            <?php  
            endif;
            $count +=1;
            $slide += 1;
            ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>


      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>


      
    </div>
  </div>
</div>
