<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs(){
        if(false){
            return redirect()->route('article');
        }
        return '<h1>Hi Dharnish you are not welcome</h1>';
    }

}
