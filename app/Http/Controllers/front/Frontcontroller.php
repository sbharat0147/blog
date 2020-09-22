<?php

namespace App\Http\Controllers\front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Frontcontroller extends BaseController
{
    public function index(){

        return view('front.index');
    }

    public function about(){

        return view('front.index');
    }

    public function contact(){

        return view('front.index');
    }

    public function frontpost(){

        return view('front.index');
    }
}

