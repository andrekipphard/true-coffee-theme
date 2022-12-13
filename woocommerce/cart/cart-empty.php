


	


<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
?>


<div class="row cart-hero" style="background-image:url('/wp-content/uploads/2022/12/Produktebild-1.jpg'); background-size:contain; background-position:right; background-repeat:no-repeat">
    
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
            <div class="text-end pt-5 mt-5">
                <img src="/wp-content/uploads/2022/11/Herobild-produkt.png">
            </div>
        </div>
        <div class="col-5">

        </div>
    </div>
    <?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
    <div class="row">

        <div class="col-1 sticky-top socials-sticky d-flex flex-row-reverse justify-content-end align-self-start ps-0">

        </div>

        <div class="col-11  d-flex">
            <div class="col-7 bg-white">
                <div class="col p-5" style="--bs-bg-opacity:1;">
                    <div class="h1 text-center text-uppercase mb-3">
                        Warenkorb
                    </div>
                    <?php do_action( 'woocommerce_cart_is_empty' );?>
                    <p class="return-to-shop">
                    
                    <a class="button wc-backward<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
                        <?php
                            /**
                             * Filter "Return To Shop" text.
                             *
                             * @since 4.6.0
                             * @param string $default_text Default text.
                             */
                            echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'Return to shop', 'woocommerce' ) ) );
                        ?>
                    </a>
                </p>
            <?php endif; ?>

                </div>
            </div>
                   
        </div>

    </div>
</div>