<?php
/*
Plugin Name: افزونه پرداخت امن زرین‌پال برای ووکامرس
Version: 5.0.13
Description: افزونه درگاه پرداخت امن زرین‌پال برای فروشگاه ساز ووکامرس
Plugin URI: https://zarinpal.com
Author: Masoud Amini, Armin Zahedi
Author URI: http://www.zarinpal.com/
Text Domain: wc-zpal
Domain Path: /languages
WC requires at least: 3.0
WC tested up to: 9.4.1
Requires at least: 5.8
Tested up to: 6.7.1
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
*/

include_once("class-wc-gateway-zarinpal.php");

add_action('before_woocommerce_init', function() {
    if ( class_exists('\Automattic\WooCommerce\Utilities\FeaturesUtil') ) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility('custom_order_tables', __FILE__, true);
    }
});