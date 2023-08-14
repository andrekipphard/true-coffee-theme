<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
?>


<div class="row cart-hero" style="background-image:url('/wp-content/uploads/2022/12/Produktebild-1.jpg'); background-size:contain; background-position:right; background-repeat:no-repeat">
   <div class="col-12">
   <div class="row">
            <div class="col-1"></div>
            <div class="col-lg-6 col-11">
                <div class="text-end pt-5 mt-5">
                    <img src="/wp-content/uploads/2023/08/Gruppe-579.png" class="mobile-hide">
                    
                </div>
            </div>
            <div class="col-5">

            </div>
        </div>
        <div class="row">

            <div class="col-1 sticky-top socials-sticky d-flex flex-row-reverse justify-content-end align-self-start ps-0">

            </div>

            <div class="col-12 offset-lg-0">
            
                <div class="row">
                <div class="col-12 col-lg-3 pe-5 pt-5 bg-white border-end border-dark">
                <div class="h1 text-start ps-4 ms-1 text-uppercase mb-3">
                            Mein Konto
                    </div>
                    <?php /**
                         * My Account navigation.
                         *
                         * @since 2.6.0
                         */
                        do_action( 'woocommerce_account_navigation' ); 
                    ?>
                </div>
                <div class="col-12 col-lg-7 bg-white">
                    
                    <div class="col p-lg-5" style="--bs-bg-opacity:1;">
                        
                        <div class="woocommerce-MyAccount-content">
                        <?php
                            /**
                             * My Account content.
                             *
                             * @since 2.6.0
                             */
                            do_action( 'woocommerce_account_content' );
                        ?>
                    </div>

                    </div>
                </div>
                </div>
                
                    
            </div>

        </div>
    </div>
   </div> 
    






















