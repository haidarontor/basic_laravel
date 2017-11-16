<?php

 namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\OrderController;
use PDF;

class PDFController extends Controller {
    public function generate_pdf($order_id) {
        $order_table_info = DB::table('tbl_order')
                ->select('*')
                ->where('order_id', $order_id)
                ->first();
        $customer_id = $order_table_info->customer_id;
        $shipping_id = $order_table_info->shipping_id;
        $payment_id = $order_table_info->payment_id;
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
        $pdf = PDF::loadView('front_end.layouts.invoice', [
                    'order_table_info' => $order_table_info,
                    'customer_info' => $customer_info,
                    'shipping_info' => $shipping_info,
                    'payment_info' => $payment_info,
                    'order_details' => $order_details,
        ]);
        return $pdf->download('0000' . $order_id . '.pdf');
    }

}




/*
 *    public function get_pdf() {
 
 
        $order_details = DB::table('tbl_order_details')
                ->select('*')
            ->get();
        $pdf = PDF::loadView('order_details', ['order_details'=> $order_details]);
        return $pdf->stream('order_details.pdf');
   }
     
 */

 /*
      public function generate_pdf($id) {
      $orderInfo = tbl_order::find($id);
      $billingInfo = tbl_customer::find($orderInfo->customer_id);
      $shippingInfo = tbl_shipping::find($orderInfo->shipping_id);
      $orderProductsInfo = tbl_order_details::where('order_id', $id)->get();
      $pdf = PDF::loadView('admin.order.download-invoice-template', [
      'orderInfo' => $orderInfo,
      'billingInfo' => $billingInfo,
      'shippingInfo' => $shippingInfo,
      'orderProductsInfo' => $orderProductsInfo,
      ]);
      //        return $pdf->stream();
      return $pdf->download('0000' . $id . '.pdf');
      }

     *
     * 
     */



