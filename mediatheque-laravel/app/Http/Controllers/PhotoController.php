<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Photos::all();
        $current_year = Carbon::now()->year;
        $current_year .= '';
        $photos = DB::table('photos')->whereYear('created_at', '=', $current_year)->get();

        $photo_paths = array();
        foreach ($photos as $photo) {
            $pictures = DB::table('photos')->where('id', '=', $photo->id)->get();

            $number_of_picture = sizeof($pictures);
            $photo_path = $pictures[0]->path;

            array_push($photo_paths, $photo_path);
        }
        $all_data = array();
        for($i = 0; $i < sizeof($photos); $i++){
            $data = array($photo_paths[$i]);
            array_push($all_data, $data);
        }

        // return $pictures;
        return view('guests.photos.index', compact('all_data'));
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
