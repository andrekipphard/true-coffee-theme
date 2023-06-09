<?php 
    $bildkommentar = get_sub_field('bildkommentar');
    $titel = get_sub_field('titel');
    $background_bild = get_sub_field('background_bild');
?>
<div class="row contact single-hero">

    <div class="col-1 sticky-top socials-sticky d-flex flex-row-reverse justify-content-end align-self-center ps-0">

    </div>

    <div class="col-10 col-lg-5 single-hero-text">
        
        <div class="text-end pt-5 mt-5 mobile-hide">
            <img src="<?= wp_get_attachment_image_url($bildkommentar, 'large');?>">
        </div>
        
        <div class="row">
            <div class="col single-hero-col bg-white p-5" style="--bs-bg-opacity:1;">
                <div class="h1 text-uppercase mb-3">
                   <?= $titel; ?>
                </div>
                <div>
                <?php if ( filter_input( INPUT_GET, 'kontaktformular' ) === 'gesendet' ) : ?>

                    <div class="alert alert-success" role="alert">
                    Das Formular wurde erfolgreich gesendet.
                    </div>

                <?php endif ?>
                    <?php #$errors = validate_contact(); print_r($errors); ?>
                    <form id="form-id" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                        <!-- Real fields -->
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nameqwer" placeholder="Name" name="nameqwer">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="emailasdf" aria-describedby="emailHelp" placeholder="Email" name="emailasdf" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="messageyxcv" rows="3" placeholder="Nachricht" name="messageyxcv"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="datenschutzqwert" required>
                            <label class="form-check-label" for="exampleCheck1" name="datenschutzqwert">Ich habe die <a href="#">Datenschutzbedingungen</a> gelesen und akzeptiere diese.</label>
                        </div>
                        <!-- H o n e y p o t -->
                        
                        <div class="mb-3">
                            <input type="text" class="ohnohoney" autocomplete="off" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="ohnohoney" autocomplete="off" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <textarea class="ohnohoney" autocomplete="off" id="message" rows="3" placeholder="Nachricht" name="message"></textarea>
                        </div>
                        <input type="hidden" name="action" value="form_submit_action">
                        <button type="submit" class="submit-form btn btn-primary">Senden</button>
                    </form>
                </div>
                <div class="row mt-lg-5">
                    <?php if( have_rows('kontaktinformationen')):
                        while( have_rows('kontaktinformationen')): the_row();
                        $icon = get_sub_field('icon');
                        $text = get_sub_field('text');
                    ?>
                    <?php if(get_row_index()==1):?>
                    <div class="col-12 col-lg-4 mt-5 text-center">

                        <i class="bi bi-<?= $icon; ?> text-center" style="font-size:2rem;"></i>
                        <div class="h4 mt-2"><?= $text; ?></div>

                    </div>

                    <?php else:?>

                    <div class="col-12 col-lg-4 mt-5 text-center border-lg-start border-dark border-top border-lg-top-0 pt-5 pt-lg-0">

                        <i class="bi bi-<?= $icon; ?>" style="font-size:2rem;"></i>
                        <div class="h4 mt-2"><?= $text; ?></div>

                    </div>
                    <?php endif;?>
                    
                    <?php endwhile;?>

                    <?php endif;?>
                
                </div>
            </div>
        </div>
    
    </div>

    <div class="col-12 col-lg-6 single-hero-col-3" style="background-image:url('<?= wp_get_attachment_image_url($background_bild, 'large');?>');">
            
    </div>

</div>