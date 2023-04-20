<?php

// phone support text under place order button
function add_custom_checkout_content()
{
    $phone_number = '123-456-7890';
    echo '<p>Behöver du hjälp? Ring oss på <a href="tel:' . $phone_number . '">' . $phone_number . '</a></p>';
}
add_action('woocommerce_review_order_after_submit', 'add_custom_checkout_content', 10);


// removes the related products section on single product pages
function remove_related_products()
{
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
}
add_action('wp', 'remove_related_products');
