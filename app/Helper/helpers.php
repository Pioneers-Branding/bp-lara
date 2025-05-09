<?php

function setActive($route){
    if(is_array($route)){
        foreach($route as $r){
            if(request()->routeIs($r)){
                return 'active';
            }
        }
    }
}

// Check Discount is available 

function checkDiscount($product){
    $currentDate = date('Y-m-d');

    if($product->offer_price > 0 && $currentDate >= $product->offer_start_date && $currentDate <= $product->offer_end_date){
        return true;
    }

    return false;
}


// Check Discount Percentage

function calculateDiscountPercent($originalPrice, $discountPrice){
    $discountAmount = $originalPrice  -  $discountPrice;
    $discountPercent = ($discountAmount / $originalPrice ) * 100;

    return $discountPercent;
}

// Product Type

function productType(string $type){
    
   switch ($type) {
    case 'new_arrival';
    return "New";

    case 'best_product';
    return "Best";

    case 'top_product';
    return "Top";

    case 'featured';
    return "Featured";

    default:
    return "";
   }

}
