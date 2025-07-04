<?php
/**
 * Snippet: Custom ShmoooCommerce checkout fields
 * Description: Adds company VAT field to checkout with validation
 * Tags: all
 * Required: 
 * Secrets: 
 * Version: 1.2.0
 * Author: Adam
 * Priority: 10
 * Context: frontend, backend
 */

// Shortcode to display the current year
add_shortcode('current_year', function() {
    return date('Y');
});
