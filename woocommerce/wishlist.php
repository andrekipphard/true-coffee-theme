<?php
/**
 * Wishlist pages template; load template parts basing on the url
 *
 * @author YITH
 * @package YITH\Wishlist\Templates\Wishlist
 * @version 3.0.0
 */

/**
 * Template Variables:
 *
 * @var $template_part string Sub-template to load
 * @var $var array Array of attributes that needs to be sent to sub-template
 */

if ( ! defined( 'YITH_WCWL' ) ) {
	exit;
} // Exit if accessed directly
?>


<div class="row cart-hero" style="background-image:url('/wp-content/uploads/2022/12/Produktebild-1.jpg'); background-size:contain; background-position:right; background-repeat:no-repeat">
    
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
            <div class="text-end pt-5 mt-5">
                <img src="/wp-content/uploads/2022/11/Herobild-produkt.png" class="mobile-hide">
            </div>
        </div>
        <div class="col-5">

        </div>
    </div>
    <div class="row">

        <div class="col-1 sticky-top socials-sticky d-flex flex-row-reverse justify-content-end align-self-start ps-0">

        </div>

        <div class="col-11">
            <div class="row">
            <div class="col-lg-7 col-12 bg-white">
                <div class="row">
                <div class="col-11 offset-lg-0 p-lg-5" style="--bs-bg-opacity:1;">
                    <div class="h1 mt-5 mt-lg-0 text-center text-uppercase mb-3" style="font-size:2rem;">
                        Wunschliste
                    </div>
                    <?php
                    /**
                     * DO_ACTION: yith_wcwl_wishlist_before_wishlist_content
                     *
                     * Allows to render some content or fire some action before the wishlist content.
                     *
                     * @param array $var Array of attributes that needs to be sent to sub-template
                     */
                    do_action( 'yith_wcwl_wishlist_before_wishlist_content', $var );
                    ?>
                    <?php
                    /**
                     * DO_ACTION: yith_wcwl_wishlist_before_wishlist_content
                     *
                     * Allows to render some content or fire some action in the wishlist content.
                     *
                     * @param array $var Array of attributes that needs to be sent to sub-template
                     */
                    do_action( 'yith_wcwl_wishlist_main_wishlist_content', $var );
                    ?>
                    <?php do_action( 'yith_wcwl_wishlist_after_wishlist_content', $var ); ?>

                </div>
                </div>
                
            </div>
            </div>
            
                   
        </div>

    </div>
</div>