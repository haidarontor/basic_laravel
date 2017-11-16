<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller {

    public function index() {
        $publish_category = DB::table('tbl_category')
                ->where('category_status', 1)
                ->get();

        $publish_manufacturer_name = DB::table('tbl_manufacturer')
                ->where('Manufacturer_status', 1)
                ->get();
        $add_product = view('front_end.admin_pages.add_product')
                ->with('publish_category', $publish_category)
                ->with('publish_manufacturer_name', $publish_manufacturer_name);
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $add_product);
    }

    public function manage_product_function() {
        $all_product = DB::table('tbl_product')
                ->select('*')
                ->get();
//       echo '<pre>';
//       print_r($all_product);
//       exit();

        $manage_product = view('front_end.admin_pages.manage_product')
                ->with('all_product', $all_product);
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $manage_product);
    }

    public function save_product_function(Request $request) {
        $data = array();

//        echo '<pre>';
//        print_r($_POST);
//        exit();
//        

        $data['id'] = $request->id;
        $data['Product_title'] = $request->product_title;
        $data['product_price'] = $request->product_price;
        $data['Product_name'] = $request->product_name;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_status'] = $request->product_status;

        if ($request->is_feature == 'on') {
            $data['is_feature'] = 1;
        }


        $image = $request->file('image_name');
//        echo'<pre>';
//        print_r($image);
//        exit();
        if ($image) {
            $image_name = str_random(20);
            $extention = strtolower($image->getClientOriginalExtension());

            $image_full_name = $image_name . '.' . $extention;
            $upload_path = 'product_images/';

            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['image_name'] = $image_url;
                DB::table('tbl_product')
                        ->insert($data);
                Session::put('message', 'Save product successfully!');
                return redirect::to('/add-product');
            }
        } else {
            DB::table('tbl_product')
                    ->insert($data);
            Session::put('message', 'Save product Information Successfully');
            return redirect::to('/add-product');
        }
    }

    public function unpublished_product_function($product_id) {

        $data = array();
        $data['product_status'] = 0;
        DB::table('tbl_product')
                ->where('product_id', $product_id)
                ->update($data);

        return redirect::to('/manage-product');
    }

    public function published_product_function($product_id) {

        $data = array();
        $data['product_status'] = 1;
        DB::table('tbl_product')
                ->where('product_id', $product_id)
                ->update($data);

        return redirect::to('/manage-product');
    }

    public function delete_product_function($product_id) {
        DB::table('tbl_product')
                ->where('product_id', $product_id)
                ->delete();
        return redirect::to('/manage-product');
    }

    public function edit_product_function($product_id) {
        $product_info_by_id = DB::table('tbl_product')
                ->where('product_id', $product_id)
                ->first();

        $publish_category_product = DB::table('tbl_category')
                ->where('category_status', 1)
                ->get();
        $publish_manufacturer_product = DB::table('tbl_manufacturer')
                ->where('manufacturer_status', 1)
                ->get();

//     echo '<pre>';
//     print_r($product_info_by_id);
//     
        $edit_product = view('front_end.admin_pages.edit_product')
                ->with('product_info', $product_info_by_id)
                ->with('publish_category_product', $publish_category_product)
                ->with('publish_manufacturer_product', $publish_manufacturer_product);


        return view('front_end.admin.dashboard')
                        ->with('admin_content', $edit_product);
    }

    public function update_product_function(Request $request) {
        $data = array();
        $data['product_title'] = $request->product_title;
        $data['product_name'] = $request->product_name;
        /*
         * product price ta ana holo 
         */
        $data['product_price'] = $request->product_price;

        $data['id'] = $request->id;

        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $product_id = $request->product_id;

        if ($request->is_feature == 'on') {
            $data['is_feature'] = 1;
        }

        $image = $request->file('image_name');
//       echo '<pre>';
//       print_r($image);
//       exit();

        $image_name = str_random(30);
        $image_extenstion = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $image_extenstion;
        $upload_path = 'product_imgaes/';

        $image_url = $upload_path . $image_full_name;
        $success = $image->move($upload_path, $image_full_name);

        if ($success) {
            $data['image_name'] = $image_url;

            /*
             *  old image path ke change korar jonno 
             */
            $old_image_path = $request->last_image_path;
            unlink($old_image_path);


            DB::table('tbl_product')
                    ->where('product_id', $product_id)
                    ->update($data);

            return redirect::to('/manage-product');
        } else {
            DB::table('tbl_product')
                    ->where('product_id', $product_id)
                    ->update($data);

            return redirect::to('/manage-product');
        }
    }

    /*
     * category function
     */

    public function category_product_function($id) {
                  $category_product_by_id=  DB::table('tbl_product')
                            ->where('id',$id)
                            ->get();


        $category_product = view('front_end.layouts.category_product')
                        ->with('category_product',$category_product_by_id);

        return view('front_end.layouts.master')
                        ->with('content', $category_product);
    }
    
    
    public function product_details_function($product_id){
        
      $product_info=  DB::table('tbl_product')
                ->where('product_id',$product_id)
                ->where('product_status',1)
                ->first();
        
       $product_details= view('front_end.layouts.product_details')
               ->with('product_info',$product_info);
       
       return view('front_end.layouts.master')
       ->with('content',$product_details);
    }
    

}
