<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class super_admin_controller extends Controller {

    public function index() {
        $dashboard = view('front_end.admin_pages.admin_content_dashboard');
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $dashboard);
    }

    public function add_category_function() {
        $add_category = view('front_end.admin_pages.add_category');
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $add_category);
    }

    public function manage_category_function() {
        $all_category = DB::table('tbl_category')
                ->select('*')
                ->get();
//  echo '<pre>';
//  print_r($all_category);
//  exit();
        $manage_category = view('front_end.admin_pages.manage_category')
                ->with('all_category', $all_category);
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $manage_category);
    }

    function save_category_function(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['category_status'] = $request->category_status;

        DB::table('tbl_category')
                ->insert($data);
        Session::put('message', 'Save category Information Successfully');
        return redirect('/add_category');
    }

    public function unpublished_category_function($id) {
        $data = array();
        $data['category_status'] = 0;

        DB::table('tbl_category')
                ->where('id', $id)
                ->update($data);
        return redirect::to('/manage_category');
    }

    public function published_category_function($id) {
        $data = array();
        $data['category_status'] = 1;

        DB::table('tbl_category')
                ->where('id', $id)
                ->update($data);
        return redirect::to('/manage_category');
    }

    public function delete_category_function($id) {
        DB::table('tbl_category')
                ->where('id', $id)
                ->delete();
        return redirect::to('/manage_category');
    }

    public function logoutFunction() {
        Session::put('admin_id');
        Session::put('admin_name');
        Session::put('message', 'you are successfully logout');
        return Redirect::to('/admin_panel');
    }

    public function edit_category_function($id) {

        $category_info_by_id = DB::table('tbl_category')
                ->where('id', $id)
                ->first();
//       echo '<pre>';
//       print_r($category_info_by_id);
        $edit_category = view('front_end.admin_pages.edit_category')
                ->with('category_info', $category_info_by_id);
        return view('front_end.admin.dashboard')
                        ->with('admin_content', $edit_category);
    }

    public function update_category_function(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $category_id = $request->id;

        DB::table('tbl_category')
                ->where('id', $category_id)
                ->update($data);

        return redirect::to('/manage_category');
    }

}
