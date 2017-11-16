<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
 public function index(){
     return view('front_end.admin_pages.add_manufacturer');
 }
 public function manage_manufacturer_function(){
    $all_manufacturer =DB::table('tbl_manufacturer')
             ->select('*')
             ->get();
    
     $manage_manufacturer=view('front_end.admin_pages.manage_manufacturer')
             ->with('all_manufacturer',$all_manufacturer);
     return view('front_end.admin.dashboard')
     ->with('admin_content',$manage_manufacturer);
 }
 
 public function save_manufacturer_function(Request $request){
     $data=array();
     $data['manufacturer_name']=$request-> manufacturer_name;
     $data['manufacturer_description']=$request-> manufacturer_description;
     $data['Manufacturer_status']=$request-> Manufacturer_status;
     
    DB::table('tbl_manufacturer')
            ->insert($data);
    Session::put('message','Save category Information Successfully');
    return redirect::to('/add-manufacturer');
 }
 
 
 public function unpublished_manufacturer_function($manufacturer_id){
     $data=array();
     $data['manufacturer_status']=0;
     DB::table('tbl_manufacturer')
             ->where('manufacturer_id',$manufacturer_id)
             ->update($data);
     return redirect::to('/manage-manufacturer');
 }
 
  public function published_manufacturer_function($manufacturer_id){
     $data=array();
     $data['manufacturer_status']=1;
     DB::table('tbl_manufacturer')
             ->where('manufacturer_id',$manufacturer_id)
             ->update($data);
     return redirect::to('/manage-manufacturer');
 }
 
 public function delete_manufacturer_function($manufacturer_id){
     DB::table('tbl_manufacturer')
             ->where('manufacturer_id',$manufacturer_id)
             ->delete();
     return redirect::to('/manage-manufacturer');
 }
 
 public function edit_manufacturer_function($manufacturer_id){
    $manufacturer_info_by_id= DB::table('tbl_manufacturer')
             ->where('manufacturer_id',$manufacturer_id)
             ->first();
//    echo '<pre>';
//    print_r($manufacturer_info_by_id);
//    return 'hello world';
   $edit_manufacturer= view('front_end.admin_pages.edit_manufacturer')
           ->with('manufacturer_info',$manufacturer_info_by_id);
    return view('front_end.admin.dashboard')
   ->with('admin_panel',$edit_manufacturer);
    
 }
 public function update_manufacturer_function(Request $request){
     $data=array();
     $data['manufacturer_name']=$request->manufacturer_name;
     $data['manufacturer_description']=$request->manufacturer_description;
    $manufacturer_id =$request->manufacturer_id;
    
    DB::table('tbl_manufacturer')
            ->where('manufacturer_id',$manufacturer_id)
            ->update($data);
    return redirect::to('/manage-manufacturer');
    
 }
 
 
}
