///start css
function axian_custom_inline_css() {
    ?>
    <style>
       .woocommerce-result-count{
	display:none;
}

.ast-onsale-card {
  display: none !important; 
}


.woocommerce-result-count{
	display:none;
}

.buy-now-button { 
	box-shadow: 0 6px #c45a1b !important;
  padding: 20px !important;
  font-size: 20px !important;
  text-transform: uppercase !important;
  color: white !important; 
	
}

#place_order { 
	background-color:#ff6900 !important;
  box-shadow: 0 6px #c45a1b !important;
  text-transform: uppercase;
  color: #ffff; /* আগের রঙ */
  padding: 12px;
  border-radius: 10px;
  font-size: 20px;
  animation: bouncePulse 2s infinite;
  transition: transform 0.3s ease;
}

/* Animation Keyframes */
@keyframes bouncePulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05) translateY(-3px);
  }
  100% {
    transform: scale(1);
  }
}


.woocommerce-notices-wrapper{
	display:none;
}

.woocommerce-billing-fields__field-wrapper{
	background-color:#d4edda;
	padding:5px;
}

/* Style the overall product box */
li.product {
    
    background-color: #fff;
    border-radius: 1px;
	box-shadow: -3px 0px 5px rgba(0, 0, 0, 0.1);

   
}




.astra-shop-summary-wrap{
	padding:5px;
	margin-top:-15px
		
}



 .woocommerce ul.products, .woocommerce-page ul.products {
    display: grid !important;
    column-gap: 5px !important;
  
    row-gap: 5px !important;
    align-items: start !important; 
}


.woocommerce-js ul.products li.product, .woocommerce-page ul.products li.product { 
	padding:4px;
    text-align: left;
    margin-bottom: 0.5em;
}


.orderby {
    margin-bottom: -20px;!important;
}

.woocommerce-js .woocommerce-breadcrumb {
	margin-top:15px !important;
	margin-bottom:-5px !important;
    font-size: 1em;
    color: #f57224 ;
} 

.add-to-cart {
  background: #2abbe8 !important;
} 

.woocommerce div.product form.cart .button.single_add_to_cart_button {
    width: 76%;
    background: #2abbe8;
	color:#fff;
}
.ast-container, .ast-container-fluid {
	margin-top:-20px;
    padding: 1px;
} 

/* Hide the 'Your order' heading on mobile devices */
@media (max-width: 768px) {
    #order_review_heading {
        display: none;
    }
}


.woocommerce-shipping-methods input[type="radio"]:checked + label { 
    color: #f57224; 
    padding:5px;
    border: 2px solid #f57224; 
    background-color: #fff3e6; 
    border-radius: 8px;
	font-size:14px;
	
}

.woocommerce-js table.shop_table .woocommerce-Price-amount, .woocommerce-page table.shop_table .woocommerce-Price-amount {
    font-weight: 700;
	 color: #f57224;
	font-size:18px !important;
	
}


.woocommerce-page.woocommerce-checkout form #order_review td:last-child, .woocommerce-page.woocommerce-checkout form #order_review th:last-child, .woocommerce.woocommerce-checkout form #order_review td:last-child, .woocommerce.woocommerce-checkout form #order_review th:last-child {
    text-align: left ; 
}


/* Remove borders from the 'Your Order' table */
.woocommerce-page.woocommerce-checkout form #order_review td, 
.woocommerce-page.woocommerce-checkout form #order_review th,
.woocommerce.woocommerce-checkout form #order_review td, 
.woocommerce.woocommerce-checkout form #order_review th {
    border: none !important;  /* Remove all borders */
    padding-left: 0;  /* Optional: Adjust padding if needed */
}
/* Hide the Subtotal row in the checkout page */
.woocommerce-page.woocommerce-checkout .cart-subtotal {
    display: none;
}

/* Hide the 'Billing details' heading */
.woocommerce-page.woocommerce-checkout .woocommerce-billing-fields h3 { 
    display: none;
}

.woocommerce-thankyou-order-received {
    display: none !important;
}



/* Order Summary Box Style */


.woocommerce-page.woocommerce-checkout .woocommerce-order ul.order_details, .woocommerce.woocommerce-checkout .woocommerce-order ul.order_details {
    margin-top: 25px;
} 


.woocommerce-order-overview {
	margin-top:20px;
    background: linear-gradient(135deg, #e6fff5, #f0fff9);

    border-radius: 14px;
    padding: 25px;
    margin-top: 25px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);

    font-size: 16px;
}

/* Each line style */
.woocommerce-order-overview li { 
	
    list-style: none;
    margin-bottom: 16px;
    padding-bottom: 10px;

    color: #14532d;
}

.woocommerce-js ul.order_details li {
    
   border-right: 0px ;
    
}

.woocommerce-js ul.products li.product .price ins {
	color:#ff6900;
    font-weight: 500;
    font-size: 18px;
}

.woocommerce-js ul.products li.product .price del {
    display: none !important;
   
}




@media (max-width: 680px) {
    .woocommerce ul.products li.product h2.woocommerce-loop-product__title {
        font-size: 13px;
			font-family:sans-serif;
    }
}





.woocommerce-Price-currencySymbol{
	font-size:20px;
	font-weight:800;
}


.woocommerce-terms-and-conditions-wrapper {
  background-color: #fff7e6;

  border-radius: 10px;
padding-left:8px;
   font-size: 12px;
  font-family: 'SolaimanLipi', 'Noto Sans Bengali', sans-serif;
}



.wc_payment_method input[type="radio"] {
  display: none;
}

.wc_payment_method label {
  font-weight: 600;
  font-size: 17px;
  color: #333;
  display: block;
  padding-left: 30px;
  position: relative;
}

.wc_payment_method label::before {
  content: "";
  width: 20px;
  height: 20px;
  border: 2px solid #aaa;
  border-radius: 100%;
  position: absolute;
  left: 0;
  top: 0;
  transition: 0.2s;
}

.wc_payment_method input[type="radio"]:checked + label::after {
  content: "";
  width: 10px;
  height: 10px;
  background: #555;
  border-radius: 50%;
  position: absolute;
  left: 5px;
  top: 5px;
}




.payment_method_cod label {
  color: #2e7d32;
}


.payment_method_cod input[type="radio"]:checked + label::after {
  background: #4caf50;
}


.payment_method_bkash label { 
  color: #df126d;
	
}


#add_payment_method #payment div.payment_box, .woocommerce-cart #payment div.payment_box, .woocommerce-checkout #payment div.payment_box {
    position: relative;
    box-sizing: border-box;
    width: 100%;
    padding: 0em; 
    margin-top:14px;
    font-size: .83em;
    border-radius: 2px;
    line-height: 1.5;
    background-color: #dfdcde;
    color: #515151;
}



#add_payment_method #payment ul.payment_methods li,
.woocommerce-cart #payment ul.payment_methods li,
.woocommerce-checkout #payment ul.payment_methods li {
  margin-bottom: 10px;
}

.woocommerce-page.woocommerce-checkout #payment div.payment_box,
.woocommerce.woocommerce-checkout #payment div.payment_box {
  background-color: #ffffff;
}

#order_review {
  padding: 0 2em;
  border-width: 0px !important;
}

.woocommerce table.shop_table thead th { 
	
  font-size: 0;
}
.woocommerce table.shop_table thead th::before {
  content: '';
}


.woocommerce-checkout-review-order-table.shop_table {
  margin-top: -40px !important;
}

.woocommerce-products-header h1{
	display :none;
}

.woocommerce-js .woocommerce-breadcrumb {
    margin-top: 6px;
    margin-bottom: 5px;
    font-size: 1em;
    color: #f57224;
}

.orderby{display:none}



.woocommerce-ordering1 select {

    color: #ffffff;
    font-size: 20px;
    font-weight: 700;
    border-radius: 12px;
    height: 60px;
  background-color:#ff6900


}


.woocommerce-js div.product div.images {
    margin-bottom: -15px !important ;
} 


.checkout-product-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
  
}

.checkout-product-thumbnail {
    flex: 0 0 auto;
    width: 90px;
}

.checkout-product-thumbnail img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}


.checkout-product-qty input.qty {
    width: 80px !important;
    text-align: center !important;
}



.woocommerce-shipping-totals th {
    display:none;
}

.woocommerce-product-gallery__image {

  margin-top: 15px;
}

.woocommerce-js .woocommerce-breadcrumb {
    margin-top: 6px;
    margin-bottom: 5px;
    font-size: 1.1em;
    color: #777;
} 




.buy-now-button1:hover {
    background-color: #d1d1d1 !important;
}

@media (max-width: 767px) { .ast-row {
  display: grid !important;
  grid-template-columns: repeat(2, 1fr) !important; /* Mobile: 2 columns */
  gap: 20px !important; /* Optional: spacing between items */
}

}


@media (max-width: 767px) {
  .ast-blog-single-element.ast-blog-meta-container,
  .ast-excerpt-container,
  .entry-title.ast-blog-single-element {
    display: none !important;
  }
}


.ast-article-post .post-thumb-img-content img {
   
    aspect-ratio: 4 / 4 !important; 
}


@media (max-width: 767px) {
    .ast-row {
        display: grid !important
;
        grid-template-columns: repeat(2, 1fr) !important;
        gap:0px !important;
    }
}


.ast-single-post .entry-title,
.ast-single-post .entry-title a {
  display: none !important;
}


/* WooCommerce পণ্যের বর্ণনা লুকানোর CSS */
.wc-block-components-product-metadata__description {
  display: none !important;
}


.single-product .woocommerce-Price-amount,
.woocommerce ul.products li.product .price {
    color: #ff6900 !important;
    font-size: 26px;
}










/* Hover Effect */
ul.wc-block-product-categories-list .wc-block-product-categories-list-item { 
		margin-bottom:30px !important;
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}


/* Product Category Name */
ul.wc-block-product-categories-list .wc-block-product-categories-list-item__name {
    font-size: 1.2rem;
    font-weight: 600;
    border-radius: 10px;
}




.woocommerce div.product form.cart .button.single_add_to_cart_button {
    width: 75%;
    background: #2abbe8;
    color: #fff;
	padding:13px;

}







/* Flex container for buttons */
.button-container {
	margin-top:-15px;
    display: flex;
    justify-content: space-between;
    gap: 4px;
}







.buy-now-button1 { 
	background-color:#fff !important;

    color: #1e293b !important; 
    font-size: 14px !important;
    font-weight: bold !important;
    text-align: center !important;
border: 0.5px solid #cccccc !important ;
	
	   border-radius: 5px !important;
    flex-basis: 80% 
}


.add_to_cart_button.ajax_add_to_cart {
    color: #fff !important;
    font-size: 14px !important;
    font-weight: bold !important;
    text-align: center !important; 
	    padding-top: 20px !important;

    padding: 14px 2px 3px 2px !important;
    border-radius: 5px !important;
    flex-basis: 20%;
}

    </style>
    <?php
}
add_action('wp_head', 'axian_custom_inline_css');











//start 
add_action('woocommerce_after_add_to_cart_button', 'add_buy_now_button');

function add_buy_now_button() {
    global $product;

    // Get the product ID
    $product_id = $product->get_id();

    // Get the checkout URL
    $checkout_url = wc_get_checkout_url();

    // Create the "Buy Now" button HTML with specific styles
    $buy_now_button_html = sprintf(
        '<a href="%s?add-to-cart=%d&redirect_to=%s&buy_now=true" class="button buy-now-button" style="padding: 10px; width: 100%%; text-align: center;">Buy Now</a>',
        esc_url($checkout_url),
        esc_attr($product_id),
        esc_url($checkout_url)
    );

    echo $buy_now_button_html;
}



// Remove the product from the cart if the "buy_now" parameter is set
add_action('init', 'remove_product_from_cart');
function remove_product_from_cart() {
    // Check if the "buy_now" parameter is set and is true
    if (isset($_GET['buy_now']) && $_GET['buy_now'] == 'true') {
        // Get the cart instance
        $cart = WC()->cart;
        
        // Empty the cart
        $cart->empty_cart();
    }
}


///


function add_extra_html_before_add_to_cart_button() {
    // The new text content you want to add
    $new_content = '
        <div class="custom-info">
            <div style="color:rgb(63, 6, 134);  margin-bottom: -15px; font-size: 15px;"><img src="https://img.alicdn.com/imgextra/i1/O1CN01YSLMZC21P3m0ZsEzD_!!6000000006976-2-tps-80-80.png" width="24">  100% Authentic from Trusted Brand <br> <p style=" margin-left: 30px; color:#9e9e9e; margin-top: -10px; font-size: 12px;">   or Get Your Money Back</p></div>
			
            <div  style="color:rgb(63, 6, 134); margin-bottom: -15px;  font-size: 15px;"> <img src="https://img.alicdn.com/imgextra/i4/O1CN01V6AraE1zBCYtzoatm_!!6000000006675-2-tps-80-80.png" width="24" data-spm-anchor-id="a2a0e.pdp.return_warranty.i0.4cc47ed7nLOGoW"> 3 days easy return <br> <p style="color:#9e9e9e; margin-left: 30px;  margin-top: -10px; font-size: 12px;">Change of mind is not applicable</p></div>
            
            <div style="color:rgb(63, 6, 134); margin-top: -10px; font-size: 15px; margin-bottom: 10px;"><img src="https://img.alicdn.com/imgextra/i1/O1CN01TDwuFN1woBQElRQ8P_!!6000000006354-2-tps-80-80.png" width="24" data-spm-anchor-id="a2a0e.pdp.return_warranty.i1.4cc47ed7nLOGoW"> 1-3 Very Fast Delivery </div>
        </div>';

    // Output the new content
    echo $new_content;
}

// Correct the action hook to add content before the add-to-cart button
add_action('woocommerce_before_add_to_cart_button', 'add_extra_html_before_add_to_cart_button');


///stop

/**
 * Limit the number of related products to 10 randomly selected items.
 */
function custom_limit_related_products( $args ) {
    if ( is_product() ) {
        $args['posts_per_page'] = 16; // Change this number to adjust the limit
        $args['orderby'] = 'rand'; // Randomize the order of related products
    }
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'custom_limit_related_products' );





function add_custom_text_after_order_review() {
    // The custom HTML content
    $custom_text = '<div style="background-color: #d4edda; padding: 8px;   font-size: 13px; margin-top: 25px; margin-bottom: 20px;">রেগুলার ডেলিভারি টাইম ঢাকার ভিতরে ১-২ দিন সারাদেশে ১-৩ দিন #steadfast courier </div>';
    
    // Display the custom text
    echo $custom_text;
}


// ✅ কাস্টম Checkout ফিল্ডস সেট করা
function custom_override_checkout_fields( $fields ) {
    $fields['billing'] = array(
        'billing_first_name' => array(
            'label'       => 'Name ( আপনার নাম )',
            'placeholder' => 'নাম',
            'required'    => true,
            'class'       => array('form-row-wide'),
            'clear'       => true,
        ),
        'billing_phone' => array(
            'label'       => 'Mobile Number ( মোবাইল নাম্বার ) ',
            'placeholder' => '01XXXXXXXXX',
            'required'    => true,
            'class'       => array('form-row-wide'),
            'clear'       => true,
        ),
        'billing_address_1' => array(
            'label'       => 'Full Address ( সম্পূর্ণ ঠিকানা থানা সহ)',
            'placeholder' => 'গ্রাম, থানা, হাউজ নাম্বার, উপজেলা, জেলা',
            'required'    => true,
            'class'       => array('form-row-wide'),
            'clear'       => true,
        ),
    );

  

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'custom_override_checkout_fields' );


// ✅ বাংলা নম্বর -> ইংরেজি কনভার্ট করার ফাংশন
function convert_bangla_number_to_english($number) {
    $bn_digits = array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
    $en_digits = array('0','1','2','3','4','5','6','7','8','9');
    return str_replace($bn_digits, $en_digits, $number);
}

// ✅ ফোন নম্বর ভ্যালিডেশন — বাংলা, স্পেস, +88, "-" হ্যান্ডেল
add_action('woocommerce_checkout_process', 'validate_billing_phone_number');
function validate_billing_phone_number() {
    if ( isset($_POST['billing_phone']) ) {
        $phone = sanitize_text_field($_POST['billing_phone']);
        $phone = convert_bangla_number_to_english($phone); // বাংলা -> ইংরেজি
        $phone = preg_replace('/[\s-]+/', '', $phone); // স্পেস এবং ড্যাশ রিমুভ
        $phone = preg_replace('/^\+?88/', '', $phone); // +88 বা 88 রিমুভ

        // ১১ ডিজিট চেক
        if ( !preg_match('/^[0-9]{11}$/', $phone) ) {
            wc_add_notice( 'ফোন নম্বরটি ১১ সংখ্যার হতে হবে। দয়া করে সঠিকভাবে দিন।', 'error' );
        }
    }
}

// ✅ ফ্রন্টএন্ডে JS দিয়ে বাংলা -> ইংরেজি, স্পেস এবং ড্যাশ রিমুভ
add_action('woocommerce_after_checkout_form', 'add_phone_number_script');
function add_phone_number_script() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const phoneInput = document.querySelector('input[name="billing_phone"]');
        if (phoneInput) {
            const banglaToEnglish = {
                '০': '0', '১': '1', '২': '2', '৩': '3', '৪': '4',
                '৫': '5', '৬': '6', '৭': '7', '৮': '8', '৯': '9'
            };

            phoneInput.addEventListener('input', function () {
                let value = this.value;

                // বাংলা সংখ্যা -> ইংরেজি
                value = value.replace(/[০-৯]/g, d => banglaToEnglish[d] || d);

                // স্পেস এবং ড্যাশ রিমুভ
                value = value.replace(/[\s-]+/g, '');

                this.value = value;
            });
        }
    });
    </script>
    <?php
}


// "Ship to a different address?" অপশনটা ডিসেবল করা
add_filter( 'woocommerce_cart_needs_shipping_address', '__return_false' ); 










add_action('woocommerce_admin_order_data_after_billing_address', 'add_whatsapp_message_button_with_product', 10, 1);

function add_whatsapp_message_button_with_product($order) {
    $phone    = $order->get_billing_phone();
    $name     = $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();
    $address  = $order->get_billing_address_1() . ', ' . $order->get_billing_city();
    $order_id = $order->get_id();

    if ($phone) {
        // ফোন নাম্বার ক্লিন +88 দিয়ে
        $clean_phone = preg_replace('/\D+/', '', $phone);
        if (strpos($clean_phone, '880') !== 0) {
            $clean_phone = '880' . ltrim($clean_phone, '0');
        }

        // শুধু প্রোডাক্টের শর্টলিংক
        $items = $order->get_items();
        $product_links = '';
        foreach ($items as $item) {
            $product_id = $item->get_product_id();
            $shortlink = wp_get_shortlink($product_id);
            if (!$shortlink) {
                $shortlink = get_permalink($product_id);
            }
            $product_links .= "🔗 $shortlink\n";
        }

        $order_total = $order->get_total();

        // WhatsApp মেসেজ
        $message  = "✅ অর্ডার কনফার্ম হয়েছে\n";
        $message .= "🆔 অর্ডার ID: {$order_id}\n";
        $message .= "👤 নাম: {$name}\n";
        $message .= "📞 ফোন: {$phone}\n";
        $message .= "🏠 ঠিকানা: {$address}\n\n";
        $message .= "Product link: {$product_links}\n";
        $message .= "💰 মোট মূল্য: ৳{$order_total}\n";
        $message .= "🚚 ডেলিভারি টাইম: ১-৩ দিনের মধ্যে ইনশাআল্লাহ।";

        $whatsapp_url = "https://wa.me/{$clean_phone}?text=" . urlencode($message);

        // বাটনের HTML
        echo '<style>
            .whatsapp-button {
                display: inline-block;
                background-color: #25D366;
                color: white;
                padding: 10px 18px;
                border-radius: 6px;
                font-weight: bold;
                text-decoration: none;
                font-size: 15px;
                margin-top: 10px;
                transition: background-color 0.3s ease;
            }
            .whatsapp-button:hover {
                background-color: #1ebe57;
            }
        </style>';

        echo '<a class="whatsapp-button" href="' . esc_url($whatsapp_url) . '" target="_blank">WhatsApp </a>';
    }
}


////new
//
//
add_filter('woocommerce_order_item_thumbnail', 'custom_order_item_image_size', 10, 2);

function custom_order_item_image_size($image, $item) {
    // Get the product from the order item
    $product = $item->get_product();

    if ($product) {
        // Get the full-size image URL
        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), 'full'); 

        // If the image URL exists, output the larger image
        if ($image_url) {
            // Set custom width and height as needed
            $image = '<img src="' . esc_url($image_url[0]) . '" width="300" height="300" alt="' . esc_attr($product->get_name()) . '" />';
        }
    }

    return $image;
}



/// 
//
function add_custom_text_after_woocommerce_order($order_id) {
    if (!$order_id) return;

    $order = wc_get_order($order_id);

    // কাস্টমার ইনফো
    $name = $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();
    $phone = $order->get_billing_phone();
    $address = $order->get_billing_address_1() . ', ' . $order->get_billing_city();

    // প্রোডাক্ট লিঙ্ক গুলো (শুধু লিঙ্ক, নাম ছাড়া)
    $items_text = '';
    foreach ($order->get_items() as $item) {
        $product = $item->get_product();
        if ($product) {
            $product_id = $product->get_id();
            $product_link = wp_get_shortlink($product_id);
            if (!$product_link) {
                $product_link = get_permalink($product_id); // শর্টলিঙ্ক না পেলে ফুল লিঙ্ক
            }
            $items_text .= "🔗 $product_link\n\n";
        }
    }

    // মোট অর্ডার ভ্যালু
    $total = $order->get_total();

    // WhatsApp মেসেজ তৈরি
    $whatsapp_msg = rawurlencode(
        "আমি একটি অর্ডার করেছি...\n\n" .
        "নাম: $name\n" .
        "নম্বর: $phone\n" .
        "ঠিকানা: $address\n\n" .
        "Product link: $items_text" .
        "💰 মোট অর্ডার মূল্য: ৳$total\n\n" .
        "আমার অর্ডারটি কি কনফার্ম করা হয়েছে?"
    );

    // ডেলিভারি টাইম
    $order_date = $order->get_date_created();
    if ($order_date) {
        $start_date = $order_date->modify('+1 day')->format('j F, Y');
        $end_date = $order_date->modify('+2 days')->format('j F, Y');
        $delivery_text = "সম্ভাব্য ডেলিভারি টাইম: $start_date থেকে $end_date এর মধ্যে।";
    } else {
        $delivery_text = "অর্ডার কনফার্ম এর পর সম্ভাব্য ডেলিভারি টাইম: অর্ডার করার পরের দিন থেকে সামনের ৩ দিনের মধ্যে।";
    }

    // কাস্টম HTML আউটপুট
    $custom_text = '
    <div style="background-color: #e6ffee; padding: 20px; margin-top: 30px; margin-bottom: 20px; border: 2px solid #a3f0c2; border-radius: 10px; text-align: center;">
        <p style="font-size: 16px; color: #155724; font-weight: bold; margin-bottom: 10px;">
            ✅ আপনার অর্ডারটি আমাদের সিস্টেমে চলে গেছে। 
        </p>
        <p style="font-size: 15px; color: #0d4d3c; font-weight: normal; margin-bottom: 15px;">
            ' . $delivery_text . '
        </p>
        <p style="font-size: 16px; color: #155724; font-weight: bold; margin-bottom: 15px;">
            অর্ডার করার পর নিচের বাটনে ক্লিক করে আমাদের একটি মেসেজ দিয়ে রাখেন, যেন অর্ডারটি দ্রুত কনফার্ম করে পাঠিয়ে দিতে পারি।
        </p>
        <a href="https://wa.me/8801892463888?text=' . $whatsapp_msg . '" target="_blank" style="display: inline-block; background-color: #25D366; color: white; padding: 12px 24px; margin: 8px; border-radius: 6px; text-decoration: none; font-size: 16px; font-weight: bold;">
            📱 WhatsApp এ মেসেজ দিন
        </a>
        <a href="http://m.me/GiftsHour" target="_blank" style="display: inline-block; background-color: #0084FF; color: white; padding: 12px 24px; margin: 8px; border-radius: 6px; text-decoration: none; font-size: 16px; font-weight: bold;">
            💬 Messenger এ মেসেজ দিন
        </a>
    </div>';

    echo $custom_text;
}
add_action('woocommerce_thankyou', 'add_custom_text_after_woocommerce_order', 5, 1);

// 🔤 প্রোডাক্ট নাম ছোট করে দেখানো শপে (৫০ ক্যারেক্টারে)
add_filter('the_title', 'axian_limit_product_title_length', 10, 2);
function axian_limit_product_title_length($title, $id) {
    if (is_shop() || is_product_category() || is_product_tag()) {
        if (get_post_type($id) === 'product') {
            $max_length = 50;
            if (mb_strlen($title) > $max_length) {
                $title = mb_substr($title, 0, $max_length) . '...';
            }
        }
    }
    return $title;
}

add_action('woocommerce_after_shop_loop_item_title', function() { 
    // Random rating: 4.0, 4.5, or 5.0
    $ratings = [4.5, 5.0];
    $rating = $ratings[array_rand($ratings)];

    // Full stars
    $full_stars = floor($rating);

    // Half star if 4.5
    $half_star = ($rating == 4.5) ? 1 : 0;

    // Build stars string
    $stars = str_repeat('★', $full_stars);
    if ($half_star) {
        $stars .= '⯪'; // visually suitable half-star symbol
    }

    // Empty stars if less than 5
    $stars .= str_repeat('☆', 5 - $full_stars - $half_star);

    echo '<div class="random-rating" style="font-size: 18px; padding-top: 5px; margin-top: -18px; margin-bottom: 6px;">' 
        . $stars . ' <span style="font-size: 15px;">(' . number_format($rating, 1) . ')</span></div>'; 
}, 15);

//////// 
add_filter('woocommerce_get_price_html', function($price_html, $product) {
    $regular_price = floatval($product->get_regular_price());
    $sale_price = floatval($product->get_sale_price());

    if ($sale_price && $regular_price > $sale_price) {
        $discount_amount = $regular_price - $sale_price;

        $badge = '<span style="
            background-color: #ff4d4d;
            color: #fff; 		
            font-weight: bold;
            font-size:12px;
            padding: 2px 2px;
            border-radius: 4px;
            margin-left: 6px;
            display: inline-block;
            vertical-align: middle;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
        ">-' . number_format($discount_amount) . '
        </span>';

        $price_html .= $badge;
    }

    return $price_html;
}, 10, 2);



add_action('woocommerce_single_product_summary', 'axian_add_trusted_product_notice', 25);

function axian_add_trusted_product_notice() {
    echo '
    <div style="background: linear-gradient(135deg, #e0ffe0, #f0fff0); border: 1px solid #c1e1c1; border-left: 5px solid #28a745; border-radius: 8px; padding: 5px 10px; margin-top: 25px; font-size: 15px; color: #333; line-height: 1.7; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
        
        <div style="text-align: center;">
            ছবিতে যেমন দেখতেছেন,ঠিক তেমনই প্রোডাক্ট পাবেন ইনশাআল্লাহ। এছাড়া চেক করে নিতে পারবেন<br>
            ⏱️ <strong>ডেলিভারি টাইম:</strong> ১ থেকে ৩ কর্মদিবসের মধ্যে।
        </div>
		
    </div>';
	    echo '
    <div style="background: linear-gradient(135deg, #e0ffe0, #f0fff0); border: 1px solid #c1e1c1; border-left: 2px solid #28a745; border-radius: 8px; padding: 2px 4px; margin-top: 25px; font-size: 12px; color: #333; line-height: 1.5; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
        
        <div style="text-align: center;">
          <strong> আমাদের রিটার্ন পলেসি </strong>  খুবই সহজ প্রোডাক্টে কোন সমস্যা থাকলে সাথে সাথে রিটার্ন অথবা খুব সহজেই এক্সচেঞ্জ করে নিতে পারবেন। বিঃ দ্রঃ কিছু কিছু ক্ষেত্রে ডিজাইন কিছুটা পরিবর্তন হতে পারে যা খুবই সামান্য কেননা কিছুদিন পরপর ডিজাইন কিছুটা নতুনত্ব আনা হয়...
        </div>
		
    </div>';
}



function custom_mobile_bottom_nav_menu() {
    if ( wp_is_mobile() ) {
        $current_url = $_SERVER['REQUEST_URI'];
        $home_url = home_url(); // dynamic domain

        ob_start();
        ?>
        <style>
            .bottom-nav {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: #ffffff;
                border-top: 1px solid #e0e0e0;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 3px 6px;
                z-index: 9999;
                box-shadow: 0 -1px 8px rgba(0, 0, 0, 0.05);
                font-family: Arial, sans-serif;
            }

            .bottom-nav a {
                flex: 1;
                text-align: center;
                text-decoration: none;
                color: #555;
                font-size: 11px;
                transition: all 0.2s ease-in-out;
            }

            .bottom-nav a .icon {
                display: block;
                margin: 0 auto;
                transition: transform 0.2s ease-in-out;
            }

            .bottom-nav a:hover .icon {
                transform: scale(1.2);
            }

            .bottom-nav a.active {
                color: #ff6600;
                font-weight: bold;
            }
        </style>

        <div class="bottom-nav">
            <a href="<?php echo esc_url($home_url); ?>" class="<?php echo ($current_url == '/' || $current_url == '/index.php') ? 'active' : ''; ?>">
                <img class="icon" src="https://organicmehedi.com/wp-content/uploads/2025/04/Home_icon_orange.png" alt="Home Icon" width="25" height="25">
                <span>Home</span>
            </a>
            <a href="<?php echo esc_url($home_url . '/category/'); ?>" class="<?php echo ( strpos($current_url, 'category') !== false ) ? 'active' : ''; ?>">
                <img class="icon" src="https://organicmehedi.com/wp-content/uploads/2025/04/68-680914_file-list-icon-svg-category-list-icon-png.jpg" alt="Category Icon" width="25" height="25">
                <span>Category</span>
            </a>
            <a href="https://www.m.me/GiftsHour" target="_blank" class="messenger">
                <img class="icon" src="https://organicmehedi.com/wp-content/uploads/2025/04/icones-de-messagerie-orange.png" alt="Messenger Icon" width="25" height="25">
                <span>Messenger</span>
            </a>
            <a href="https://wa.me/8801892463888" target="_blank" class="whatsapp">
                <img class="icon" src="https://organicmehedi.com/wp-content/uploads/2025/04/apple-phone.png" alt="WhatsApp Icon" width="25" height="25">
                <span>WhatsApp</span>
            </a>
        </div>
        <?php
        echo ob_get_clean();
    }
}
add_action('wp_footer', 'custom_mobile_bottom_nav_menu');



// Show dynamic product category dropdown (only)
add_action('woocommerce_before_shop_loop', 'add_only_dynamic_category_dropdown', 20);

function add_only_dynamic_category_dropdown() {
    if (is_shop() || is_product_category()) {
        $terms = get_terms(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => true,
        ));

        if (!empty($terms) && !is_wp_error($terms)) {
            echo '<form method="get" class="woocommerce-ordering1" style="margin-bottom: -4px; margin-top: 4px;">';
            echo '<select name="product_cat" onchange="this.form.submit()" aria-label="Filter by category">';
            echo '<option value="">All Categories</option>';

            foreach ($terms as $term) {
                $selected = (isset($_GET['product_cat']) && $_GET['product_cat'] === $term->slug) ? 'selected' : '';
                echo '<option value="' . esc_attr($term->slug) . '" ' . $selected . '>' . esc_html($term->name) . '</option>';
            }

            echo '</select>';
            echo '<input type="hidden" name="paged" value="1" />';
            echo '</form>';
        }
    }
}

// Filter products based on selected product_cat slug
add_action('pre_get_posts', 'filter_products_by_selected_category');
function filter_products_by_selected_category($query) {
    if (!is_admin() && $query->is_main_query() && (is_shop() || is_product_category())) {
        if (isset($_GET['product_cat']) && $_GET['product_cat'] != '') {
            $cat_slug = sanitize_text_field($_GET['product_cat']);
            
            // Append existing tax_query if any
            $existing_tax_query = $query->get('tax_query') ?: array();

            $existing_tax_query[] = array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => $cat_slug,
            );

            $query->set('tax_query', $existing_tax_query);
        }
    }
}


// Show product thumbnail and quantity input on checkout
add_filter('woocommerce_checkout_cart_item_quantity', 'custom_checkout_item_quantity_input', 9999, 3);

function custom_checkout_item_quantity_input($product_quantity, $cart_item, $cart_item_key) {
    $product = $cart_item['data'];
    $product_id = $cart_item['product_id'];

    if (!$product->is_sold_individually()) {
        $thumbnail = $product->get_image([100, 100]); // Thumbnail size

        // Output quantity input with hidden key for later update
        $product_quantity = '<div class="checkout-product-wrapper">';
        $product_quantity .= '<div class="checkout-product-thumbnail">' . $thumbnail . '</div>';
        $product_quantity .= '<div class="checkout-product-qty">';
        $product_quantity .= woocommerce_quantity_input([
            'input_name'  => 'shipping_method_qty_' . $product_id,
            'input_value' => $cart_item['quantity'],
            'max_value'   => $product->get_max_purchase_quantity(),
            'min_value'   => 0,
        ], $product, false);
        $product_quantity .= '<input type="hidden" name="product_key_' . $product_id . '" value="' . esc_attr($cart_item_key) . '">';
        $product_quantity .= '</div></div>';
    }

    return $product_quantity;
}

// Update cart quantities when changed on checkout page
add_action('woocommerce_checkout_update_order_review', 'custom_update_item_quantity_checkout');

function custom_update_item_quantity_checkout($post_data) {
    parse_str($post_data, $data);
    $updated = false;

    foreach ($data as $key => $value) {
        if (strpos($key, 'shipping_method_qty_') === 0) {
            $product_id = str_replace('shipping_method_qty_', '', $key);
            $cart_key = $data['product_key_' . $product_id] ?? null;

            if ($cart_key !== null) {
                WC()->cart->set_quantity($cart_key, wc_stock_amount($value), false);
                $updated = true;
            }
        }
    }

    if ($updated) {
        WC()->cart->calculate_totals();
    }
}

// Hide product title on checkout page
add_filter('woocommerce_cart_item_name', 'custom_hide_product_title_checkout', 10, 3);

function custom_hide_product_title_checkout($product_name, $cart_item, $cart_item_key) {
    return is_checkout() ? '' : $product_name;
}






/////new

add_action( 'woocommerce_review_order_after_submit', 'add_image_below_place_order_button' );

function add_image_below_place_order_button() {
    echo '<div style="margin-top:20px; text-align:center;">
        <img src="https://organicmehedi.com/wp-content/uploads/2025/04/aw.png" alt="Gift Image" style="max-width:100%; height:auto;" />
    </div>';
}



////
//
//nbw 
// Add to your theme's functions.php file

function custom_responsive_product_slider() {
    ob_start();
    ?>
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
        .custom-product-slider img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .custom-product-slider .product-item {
           
            text-align: center;
        }
        .custom-product-slider .slick-slide {
            margin: 5px;
        }
    </style>

    <div class="custom-product-slider">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 16,
            'orderby' => 'rand',
            'post_status' => 'publish'
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post();
                global $product;
                ?>
                <div class="product-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo $product->get_image(); ?>
                   
                    </a>
                </div>
            <?php endwhile; endif;
        wp_reset_postdata(); ?>
    </div>

    <!-- Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        jQuery(document).ready(function($){
            $('.custom-product-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 2500,
                dots: false,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3
                        }
                    }
                ]
            });
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('random_product_slider', 'custom_responsive_product_slider');




///ne5res
add_action('woocommerce_after_single_product_summary', 'axian_review_image_slider_after_description', 12);

function axian_review_image_slider_after_description() {
    if (!is_product()) return;

    ?>
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
        .review-image-slider {
            margin: 30px 0;
        }
        .review-image-slider .slide-item {
            padding: 10px;
        }
        .review-image-slider .slide-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.3);
        }
    </style>

    <div class="review-image-slider">
        <?php
        $images = [
            "https://organicmehedi.com/wp-content/uploads/2025/04/12.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/10.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/11.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/9.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/8.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/7.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/5-1.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/6.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/4.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/3-1.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/1-1.jpg",
            "https://organicmehedi.com/wp-content/uploads/2025/04/2-2.jpg",
        ];

        foreach ($images as $img_url) {
            echo '<div class="slide-item"><img src="' . esc_url($img_url) . '" alt="Review Image"></div>';
        }
        ?>
    </div>

    <!-- jQuery + Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        jQuery(document).ready(function($){
            $('.review-image-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 500,
                arrows: true,
                dots: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <?php
}


// Modify the Place Order button text to show the total amount with Bangla text and add custom CSS
function custom_place_order_button_text( $button_html ) {
    // Ensure WooCommerce is available
    if ( ! class_exists( 'WooCommerce' ) ) {
        return $button_html;
    }

    // Get the current WooCommerce cart total (including shipping)
    $cart = WC()->cart;
    $total_amount = $cart->get_total( 'edit' ); // This gets the total, including shipping

    // Modify the button text to show the confirmation message with total amount
    $button_html = str_replace('Place order', 'অর্ডারটি কনফর্ম করুন ' . 'TK.' . $total_amount, $button_html);

    

    return $button_html;
}

add_filter( 'woocommerce_order_button_html', 'custom_place_order_button_text' );





//end

// Add product image column to WooCommerce admin order details
add_action('woocommerce_before_order_itemmeta', 'xian_show_product_image_in_admin_order', 10, 3);

function xian_show_product_image_in_admin_order($item_id, $item, $product) {
    if (is_admin() && $item->is_type('line_item')) {
        $product = $item->get_product();
        if ($product && $product->get_image_id()) {
            $thumbnail = wp_get_attachment_image($product->get_image_id(), 'thumbnail', false, array(
                'style' => 'width: 160px; height: auto; margin-bottom: 5px; display: block;'
            ));
            echo '<div class="xian-admin-product-thumb">' . $thumbnail . '</div>';
        }
    }
}


//////////

add_action('woocommerce_after_shop_loop_item', 'add_buy_now_button_shop_page', 20);

function add_buy_now_button_shop_page() {
    global $product;

    $product_id = $product->get_id();
    $checkout_url = wc_get_checkout_url();

    // Quick Order Button (Redirects to Checkout)
    $buy_now_button_html = sprintf(
        '<a href="%s?add-to-cart=%d&redirect_to=%s&buy_now=true" class="button buy-now-button1">Quick Order</a>',
        esc_url($checkout_url),
        esc_attr($product_id),
        esc_url($checkout_url)
    );

    // AJAX Add to Cart Button
    $add_to_cart_button_html = sprintf(
        '<a href="%s" data-quantity="1" data-product_id="%d" data-product_sku="%s" class="button add_to_cart_button ajax_add_to_cart">Add</a>',
        esc_url($product->add_to_cart_url()),
        esc_attr($product_id),
        esc_attr($product->get_sku())
    );

    echo '<div class="button-container">';
    echo $buy_now_button_html;
    echo $add_to_cart_button_html;
    echo '</div>';
}




