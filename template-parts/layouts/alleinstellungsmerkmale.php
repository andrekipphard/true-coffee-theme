<div class="row d-flex justify-content-center alleinstellungsmerkmale mt-5 pt-5">
    <?php if( have_rows('alleinstellungsmerkmal')):
                while( have_rows('alleinstellungsmerkmal')): the_row();
                $titel = get_sub_field('titel');
    ?>
    <div class="col-3 me-5">
        
        <div class="h3 text-uppercase border-start border-dark p-5 me-5">
            <?= $titel; ?>
        </div>

        <div class="row ms-0">

            <div class="col-6 border-bottom border-dark mb-2">		

            </div>

            <div class="col-6">

            </div>
        </div>
        <ul class="border-start border-dark p-5">
            <?php if( have_rows('merkmale')):
                    while( have_rows('merkmale')): the_row();
                    $merkmal = get_sub_field('merkmal');
            ?>
            <li class="bg-transparent mb-3 alleinstellungsmerkmal"><?= $merkmal;?></li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>