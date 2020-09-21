<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Logincontroller extends Controller
{
    function auth(Request $request){

        $email= $request->input('username');
        $pwd= $request->input('pwd');

        $res = DB::table('users')
            ->where('username',$email)
            ->where('password',$pwd)
            ->get();

         if(isset($res[0]->id)){
             if($res[0]->status==1){
                 $request->session()->put('blog_user_id', $res[0]->id);
                 $request->session()->put('blog_user_name', $res[0]->name);
                 return redirect(route('list'));
             }else{
                 $request->session()->flash('msg','User not active');
                 return redirect(route('login'));
             }

         } else {
             $request->session()->flash('msg','Please enter valid login details');
             return redirect(route('login'));
         }
     }

    function logout(Request $request){

         $request->session()->forget('blog_user_id');
         return redirect(route('login'));

    }

    function login(Request $request){

        return view('admin.login');
    }

}

