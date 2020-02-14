<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
   public function viewPhotos(){
        echo Carbon::now()->format('d-m-Y');
   }
}
