<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nameRouteController extends Controller
{
    //
    function show(){
        // return redirect()->to('home/profile/user/name');
        return to_route('nm');
    }

    function user(){
        // return redirect()->to('home/profile/user/name/{name}');
        return to_route('user',['name'=>'Lovepreet']);
    }
}
