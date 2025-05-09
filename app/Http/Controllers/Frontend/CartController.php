<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariantItem;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
        
    public function addToCart(Request $request) {
        
        $product = Product::findOrFail($request->product_id);

        $variants = [];
        $variantsTotalPrice = 0;
        
        if($request->has('variants_items')){
            foreach($request->variants_items as $item_id){
                $variantItem = ProductVariantItem::find($item_id);
                $variants[$variantItem->ProductVariant->name]['name'] = $variantItem->name;
                $variants[$variantItem->ProductVariant->name]['price'] = $variantItem->price;
                $variantsTotalPrice += $variantItem->price;
            }
        }        

        $productPrice = 0;

        if(checkDiscount($product)){
            $productPrice = $product->offer_price;
        }else{
            $productPrice = $product->price;
        }

        $cartData = [];
        $cartData['id'] = $product->id;
        $cartData['name'] = $product->name;
        $cartData['qty'] = $request->qty;
        $cartData['price'] = $productPrice;
        $cartData['weight'] = 10;
        $cartData['options']['variants'] = $variants;
        $cartData['options']['variants_total'] = $variantsTotalPrice;
        $cartData['options']['slug'] = $product->slug;
        $cartData['options']['image'] = $product->thumb_img;

        Cart::add($cartData);

        return response(['status' => 'success', 'message' => 'Product Added to Cart']);

    }


    public function cartDetails(){

        $cartItems = Cart::content();
        return view('frontend.pages.cart-detail', compact('cartItems'));

    }


    public function updateProductQty(Request $request){

        Cart::update($request->rowId, $request->quantity);
        $productTotal = $this->getProductTotal($request->rowId);
        return response(['status' => 'success', 'message' => 'Quantity Updated Successfully', 'product_total' => $productTotal]);

    }

    public function getProductTotal($rowId){

       $product = Cart::get($rowId);
       $total = ($product->price + $product->options->variants_total) * $product->qty;
       return $total;

    }

    public function clearCart(){

        Cart::destroy();
        return response(['status' => 'success', 'message' => 'Cart is clear']);

    }

    public function removeProduct($rowId){

        Cart::remove($rowId);        
        return redirect()->back();

    }

}
