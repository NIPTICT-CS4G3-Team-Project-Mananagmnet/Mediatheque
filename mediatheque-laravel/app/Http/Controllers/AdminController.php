<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function uploadMultiplePictures(Request $request){
//        return json_encode(['status'=>'successful']);
        return json_encode($_FILES->name);
    }
}
