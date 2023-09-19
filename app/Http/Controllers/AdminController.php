<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

  
    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        $result = Admin::where(['admin_email'=>$email,'password'=>$password])->get();
        // echo "<pre>";
        // print_r($request);
        // echo "</pre>";
        // die;


        // if(isset($result['0']->admin_id)){
        if(isset($request)){
           $request->session()->put('ADMIN_LOGIN',true);
        //    $request->session()->put('ADMIN_ID',$result['0']->id);
           return redirect('admin/dashboard');
        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }

        
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    
  
  
}
