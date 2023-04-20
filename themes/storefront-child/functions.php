<?php

// phone support text under place order button
function add_custom_checkout_content()
{
    $phone_number = '123-456-7890';
    echo '<p>Behöver du hjälp? Ring oss på <a href="tel:' . $phone_number . '">' . $phone_number . '</a></p>';
}
add_action('woocommerce_review_order_after_submit', 'add_custom_checkout_content', 10);
