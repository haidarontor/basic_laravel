<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\DB;
use Redirect;

class CartController extends Controller {

    public function add_to_cart_function($product_id, Request $request=null) {
     if($request->qty ==null){   
     $qty=1;
     }
     else{
       $qty=$request->qty;
     }
     //$product_id = $request->product_id;
//        echo $product_id; 
//        exit();
        $product_info = DB::table('tbl_product')
                ->where('product_id', $product_id)
                ->first();
////      echo '<pre>';
////      print_r($product_info);
        Cart::add(['id' => $product_info->product_id, 'name' => $product_info->product_name, 'qty' => $qty, 'price' => $product_info->product_price, 'options' => ['image' => $product_info->image_name]]);
        return Redirect::to('show-cart');
    }

    public function show_cart_function() {
        $show_cart = view('front_end.layouts.show_cart');
        return view('front_end.layouts.master')
                        ->with('content',$show_cart);
    }

    public function update_cart_function(Request $request) {
        $qty = $request->qty;
        $rowId = $request->row_id;

        Cart::update($rowId, $qty);


        return Redirect::to('show-cart');
    }

    public function delete_to_cart_function($rowId) {
        Cart::remove($rowId);

        return Redirect::to('show-cart');
    }

    public function checkout_function(){
        $check_out=view('front_end.layouts.checkout');
        return view('front_end.layouts.master')
        ->with('content',$check_out);
    }
    
  
}
