<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller {

    public function manage_order() {
        $all_order = DB::table('tbl_order')
                ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
                ->select('tbl_customer.*', 'tbl_order.*')
                ->get();


        $manage_order = view('front_end.admin_pages.manage_order')
                ->with('all_order', $all_order);
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $manage_order);
    }

    public function delete_order($order_id) {
        DB::table('tbl_order')
                ->where('order_id', $order_id)
                ->delete();
        DB::table('tbl_order_details')
                ->where('order_id', $order_id)
                ->delete();
        return redirect::to('/manage-order');
    }

    public function in_voice($order_id) {
        $order_table_info = DB::table('tbl_order')
                ->select('*')
                ->where('order_id', $order_id)
                ->first();
//            print_r($order_table_info);
//            exit();
        $customer_id = $order_table_info->customer_id;
        $shipping_id = $order_table_info->shipping_id;
        $payment_id = $order_table_info->payment_id;
//            print_r($payment_id);
//           exit();
        $customer_info = DB::table('tbl_customer')
                ->select('*')
                ->where('customer_id', $customer_id)
                ->first();
        $shipping_info = DB::table('tbl_shipping')
                ->select('*')
                ->where('shipping_id', $shipping_id)
                ->first();
        $payment_info = DB::table('tbl_payment')
                ->select('*')
                ->where('payment_id', $payment_id)
                ->first();

        $order_details = DB::table('tbl_order_details')
                ->where('order_id', $order_id)
                ->get();
        $view_voice = view('front_end.layouts.view_voice')
                ->with('order_details', $order_details)
                ->with('order_table_info', $order_table_info)
                ->with('customer_info', $customer_info)
                ->with('shipping_info', $shipping_info)
                ->with('payment_info', $payment_info);
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $view_voice);
    }

    public function edit_manage_order($order_id) {

        $order_details_by_order_id = DB::table('tbl_order_details')
                ->select('*')
                ->where('order_id', $order_id)
                ->get();
        $order_table_info = DB::table('tbl_order')
                ->select('*')
                ->where('order_id', $order_id)
                ->first();

        $customer_id = $order_table_info->customer_id;
        $shipping_id = $order_table_info->shipping_id;


        $customer_info = DB::table('tbl_customer')
                ->select('*')
                ->where('customer_id', $customer_id)
                ->first();
        $shipping_info = DB::table('tbl_shipping')
                ->select('*')
                ->where('shipping_id', $shipping_id)
                ->first();

        $edit_manage_order = view('front_end.admin_pages.edit_manage_order')
                ->with('order_details_by_order_id', $order_details_by_order_id)
                ->with('customer_info', $customer_info)
                ->with('shipping_info', $shipping_info);
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $edit_manage_order);
    }

    public function update_quantity_order_details(Request $request) {
        $data = array();
        $data['product_sales_quantity'] = $request->product_sales_quantity;
        $product_details_id = $request->product_details_id;
        $order_id = $request->order_id;


        DB::table('tbl_order_details')
                ->where('product_details_id', $product_details_id)
                ->update($data);
        return redirect::to('/edit-manage-order/' . $order_id);
    }

    public function delete_qty() {

        DB::table('tbl_order_details')
                ->delete();
    }

}

//        $product_price = $request->product_price;
//        $product_old_quantity = $request->product_old_quantity;
//        
//        $old_price = $product_price * $product_old_quantity;
//        $new_price = $product_price * $data['product_sales_quantity'];
////        
//        $order_id_info = DB::table('tbl_order')
//                ->select('*')
//                ->where('order_id', $order_id)
//                ->first();

//        $old_order_total = $order_id_info->order_total;
//        
//        $new_total_price = $old_order_total-$old_price+$new_price;
//        
//        echo "<br/>";
//       // print_r($old_order_total );
//                echo "<br/>";
//
//        print_r($old_price);
//                echo "<br/>";
//
//        print_r($new_price);
//                echo "<br/>";
//
//        print_r($new_total_price);
//        
//        exit();
//        
//        DB::table('tbl_order')
//            ->where('order_id', $order_id)
//            ->update(['order_total' => $new_total_price]);
