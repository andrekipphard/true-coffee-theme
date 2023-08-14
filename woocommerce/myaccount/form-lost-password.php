



<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>


<div class="row cart-hero" style="background-image:url('/wp-content/uploads/2022/12/Produktebild-1.jpg'); background-size:contain; background-position:right; background-repeat:no-repeat">
    
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
            <div class="text-end pt-5 mt-5">
                <img src="/wp-content/uploads/2023/08/Gruppe-579.png">
            </div>
        </div>
        <div class="col-5">

        </div>
    </div>
    <div class="row">

        <div class="col-1 sticky-top socials-sticky d-flex flex-row-reverse justify-content-end align-self-start ps-0">

        </div>

        <div class="col-11  d-flex">
            <div class="col-7 bg-white">
                <div class="col p-5" style="--bs-bg-opacity:1;">
                    <div class="h1 text-center text-uppercase mb-3">
                        Passwort vergessen
                    </div>
                    <form method="post" class="woocommerce-ResetPassword lost_reset_password">

                        <p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

                        <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                            <label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
                        </p>

                        <div class="clear"></div>

                        <?php do_action( 'woocommerce_lostpassword_form' ); ?>

                        <p class="woocommerce-form-row form-row">
                            <input type="hidden" name="wc_reset_password" value="true" />
                            <button type="submit" class="woocommerce-Button button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
                        </p>

                        <?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

                    </form>
                    <?php do_action( 'woocommerce_after_lost_password_form' ); ?>

                </div>
            </div>
                   
        </div>

    </div>
</div>
