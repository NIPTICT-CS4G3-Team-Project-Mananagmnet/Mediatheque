<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photos;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::all();
        $current_year = Carbon::now()->year;
        $current_year .= '';
        $albums = DB::table('albums')->whereYear('created_at', '=', $current_year)->get();

        $number_of_pictures_for_each_album = array();
        $photo_paths = array();
        foreach($albums as $album){
            $number_of_picture = 0;
            $pictures = DB::table('photos')->where('album_id', '=', $album->id)->get();

            $number_of_picture = sizeof($pictures);
            $photo_path = $pictures[0]->path;


            array_push($number_of_pictures_for_each_album, $number_of_picture);
            array_push($photo_paths, $photo_path);
        }

        $all_data = array();
        for($i = 0; $i < sizeof($albums); $i++){
            $data = array($albums[$i]->album, $number_of_pictures_for_each_album[$i], $photo_paths[$i]);
            array_push($all_data, $data);
        }

        // return $all_data;
        return view('guests.albums.index', compact('all_data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
