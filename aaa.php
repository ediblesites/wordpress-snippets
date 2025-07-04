<?php
/**
 * Snippet: Custom WooCommerce checkout fields
 * Description: Adds company VAT field to checkout with validation
 * Tags: woocommerce, checkout, ecommerce
 * Required: woocommerce>=5.0
 * Secrets: vat_api_key
 * Version: 1.2.0
 * Author: Your Name
 * Priority: 10
 * Context: frontend
 */

// Shortcode to display the current time
add_shortcode('current_time', function() {
    return date('H:i:s');
});
