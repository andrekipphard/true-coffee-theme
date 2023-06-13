<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="row cart-hero" style="background-image:url('/wp-content/uploads/2022/12/Produktebild-1.jpg'); background-size:contain; background-position:right; background-repeat:no-repeat">
    
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-6">
            <div class="text-end pt-5 mt-5 mobile-hide">
                <img src="/wp-content/uploads/2022/11/Herobild-produkt.png">
            </div>
        </div>
        <div class="col-5">

        </div>
    </div>
    <div class="row">

        <div class="col-2 sticky-top socials-sticky d-flex flex-row-reverse justify-content-end align-self-start ps-0">

        </div>
        
       
            <div class="col-11 col-lg-10 offset-1 bg-white">
                <div class="row">
                    <div class="col-12 col-lg-7 pt-5 pe-5 ps-5">
                        <div class="h1 text-center text-uppercase mb-3">
                            Kasse
                        </div>
                        <?php do_action( 'woocommerce_before_checkout_form', $checkout );?>
                    </div>
                </div>
                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
                <div class="row d-flex">
                    
                        <div class="col-12 col-lg-7 p-5" style="--bs-bg-opacity:1;">
                            
                            
                            <?php // If checkout registration is disabled and not logged in, the user cannot checkout.
                            if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
                                echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
                                return;
                            }

                            ?>
                            
                            
                            <?php if ( $checkout->get_checkout_fields() ) : ?>

                            <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                            <?php do_action( 'woocommerce_checkout_billing' ); ?>

                            <?php do_action( 'woocommerce_checkout_shipping' ); ?>

                            <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

                            <?php endif; ?>

                        </div>


                    <div class="col-12 col-lg-5 p-5 bg-white border-lg-start border-dark">
                    

                        <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
        
                        <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
                        
                        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                        </div>

                        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
        
                        
                    </div>
                    
                    
                </div>
                </form>
        <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
            </div>
                
                    
        

    </div>
</div>
