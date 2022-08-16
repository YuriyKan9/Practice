<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


class CookiesController extends Controller
{
    public function setCookie(Request $request){
        $minutes = 60;
        $formFields = $request->validate(
            [
                'box' => 'required'
            ]
            );
        
        Cookie::queue('name', $formFields['box'], $minutes);
        return back(); 
     }
    public function getCookie(Request $request){
        $value = $request->cookie('name');
        echo $value;
     }
    
}