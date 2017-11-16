<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Cart;

class CheckoutController extends Controller {

    public function save_customer_function(Request $request) {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['company_name'] = $request->company_name;
        $data['email_address'] = $request->email_address;
        $data['address'] = $request->address;
        $data['country'] = $request->country;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['post_zip_code'] = $request->post_zip_code;
        $data['mobile_number'] = $request->mobile_number;
        $data['password'] = $request->password;


        $customer_id = DB::table('tbl_customer')
                ->insertGetId($data);
//      echo '--------------'.$customer_id;
        Session::put('customer_id', $customer_id);
        return Redirect::to('/shipping-address');
    }

    public function shipping_address_function() {
        $shipping_address = view('front_end.layouts.shipping_address');
        return view('front_end.layouts.master')
                        ->with('content', $shipping_address);
    }

    public function save_shipping_function(Request $request) {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['company_name'] = $request->company_name;
        $data['email_address'] = $request->email_address;
        $data['address'] = $request->address;
        $data['country'] = $request->country;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['post_zip_code'] = $request->post_zip_code;
        $data['mobile_number'] = $request->mobile_number;
        $data['password'] = $request->password;

        $shipping_id = DB::table('tbl_shipping')
                ->insertGetId($data);
        // echo '--------------' . $shipping_id;
        Session::put('shipping_id', $shipping_id);
        return Redirect::to('/payment');
    }

    public function payment_function() {
        $payment = view('front_end.layouts.payment');
        return view('front_end.layouts.master')
                        ->with('content', $payment);
    }

    public function place_order(Request $request) {
        $payment_type = $request->payment_type;

        $data = array();
        $data['payment_type'] = $payment_type;

        $payment_id = DB::table('tbl_payment')
                ->insertGetId($data);

        /*
         * starting order table
         */
        $odata = array();
        $odata['customer_id'] = Session::get('customer_id');
        $odata['shipping_id'] = Session::get('shipping_id');
        $odata['payment_id'] = $payment_id;
        $odata['order_total'] = Cart::subtotal();
        $order_id = DB::table('tbl_order')
                ->insertGetId($odata);
        /*
         * ending order table
         */

        /*
         * starting order details table
         */

        $oddata = array();
        $contents = Cart::content();
        foreach ($contents as $v_contents) {
            $oddata['order_id'] = $order_id;
            $oddata['product_id'] = $v_contents->id;
            $oddata['product_name'] = $v_contents->name;
            $oddata['product_price'] = $v_contents->price;
            $oddata['product_sales_quantity'] = $v_contents->qty;

            DB::table('tbl_order_details')
                    ->insertGetId($oddata);
        }
        /*
         * ending  order details table
         */

        if ($payment_type == 'paypal') {
            
        }

        if ($payment_type == 'cash_on_delivery') {

            Cart::destroy();
            return Redirect::to('/order-successfull');
        }
    }

    public function order_successfull() {
        $successfull_order = view('front_end.layouts.successfull_order');
        return view('front_end.layouts.master')
                        ->with('content', $successfull_order);
    }

}
