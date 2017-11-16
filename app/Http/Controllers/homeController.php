<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homeController extends Controller {

    public function index() {
        $all_publihed_product = DB::table('tbl_product')
                ->where('product_status', 1)
                ->get();
        return view('front_end.home_content')
                        ->with('all_publihed_product', $all_publihed_product);
    }

    public function aboutFunction() {
        return view('front_end.layouts.about');
    }

    public function deliveryFunction() {
        return view('front_end.layouts.delivery');
    }

    public function previewFunction() {
        return view('front_end.layouts.preview');
    }

    public function registration() {
        $registration = view('front_end.layouts.registration');

        return view('front_end.layouts.master')
                        ->with('content', $registration);
    }

    public function registration_save_info(Request $request) {
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

        DB::table('tbl_registration')
                ->insertGetId($data);


        return Redirect::to('/registration');
    }

}
