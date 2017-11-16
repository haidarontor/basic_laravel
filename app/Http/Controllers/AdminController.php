<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {

  

    public function admin_function() {
        return view('front_end.admin.admin_login');
    }

    public function admin_login_check(Request $request) {
        $email_address = $request->admin_email_address;
        $admin_password = $request->admin_password;
//        echo $email_address, '------------------', $admin_password;
//        exit();

        $admin_info = DB::table('tbl_admin')
                ->where('admin_email_address', $email_address)
                ->where('admin_password', md5($admin_password))
                ->first();
//        echo '<pre>';
//        print_r($admin_info);
//      exit();
        if ($admin_info) {
            Session::put('admin_name', $admin_info->admin_name);
            Session::put('admin_id', $admin_info->admin_id);
            Session::put('access_lebel', $admin_info->access_lebel);
    
            return Redirect::to('/dashboard');
        } else {
            Session::put('exception', 'your user id or password invalid');
            return redirect::to('/admin-panel');
        }
    }

}
