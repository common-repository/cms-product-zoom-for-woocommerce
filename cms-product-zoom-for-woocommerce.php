<?php
/*
Plugin Name: CMS Product Zoom for WooCommerce
Description: Easily enlarge your products by mouse over on them.
Version: 1.02
Author: gansa.pl
Author URI: https://gansa.pl
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: cms-product-zoom-for-woocommerce
Domain Path: /languages
*/
define('CMS_PROD_ZOOM_FOR_WC_PLUGIN_DIR', 'cms-product-zoom-for-woocommerce');

add_action('adminmenu', 'cms_product_zoom_for_woocommerce');
function cms_product_zoom_for_woocommerce() {
    wp_register_style( 'cms_product_zoom_for_woocommerce', plugins_url(CMS_PROD_ZOOM_FOR_WC_PLUGIN_DIR . '/css/cms-product-zoom-for-woocommerce.css'));
    wp_enqueue_style( 'cms_product_zoom_for_woocommerce' );
}  
function my_plugin_init() {
  load_plugin_textdomain( 'cms-product-zoom-for-woocommerce', false, 'cms-product-zoom-for-woocommerce/languages' );
}
add_action('init', 'my_plugin_init');
?>
