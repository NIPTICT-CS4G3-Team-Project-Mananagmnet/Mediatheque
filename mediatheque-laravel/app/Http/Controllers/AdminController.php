<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    // function for uploading photo
    public function upload(Request $req){

        $input = $req->all();

        $image = $input["img"];  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10).'.'.'png';
        \File::put(public_path(). '/' . $imageName, base64_decode($image));

        


    }

}
