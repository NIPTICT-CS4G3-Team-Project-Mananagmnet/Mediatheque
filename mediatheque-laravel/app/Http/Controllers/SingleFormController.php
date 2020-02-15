<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleFormController extends Controller
{
    public function index(){
        return view('admin.single_form');
    }

    public function upload(Request $req){

        $input = $req->all();

        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$req->image->extension();  
        
        $req->image->move(public_path('uploads'), $imageName);

        $album = $input["album"];
        $name = $input["name_pic"];
        $date = $input["date"];
        $des = $input["des"];
        $category = $input["select_category"];

        Album::create([
            "album" => $album,
            "description" => ""
        ]);


        $album_id = DB::table('albums')->where('album',$album)->first()->id;
        $category_id = DB::table('categories')->where('category',$category)->first()->id;


        Photos::create([
            "path" => $imageName,
            "name" => $name,
            "date" => $date,
            "description" => $des,
            "album_id" => $album_id,
            "category_id" => $category_id
        ]);

        $photos = Photos::all();


        return redirect('/admin/image_page');

    }


    public function addNewCategory(Request $req){

        $input = $req->all();

        $new_cat = $input["categoryName"];

        Category::create([
            "category" => $new_cat
        ]);
        
        
        return redirect()->back();
    }


    public function showImage(){

        $photos = Photos::all();

        return view('admin/image_page')->with('photos',$photos);
    }


    public function edit($id){

        $photos = Photos::find($id);

        $album_name = DB::table('albums')->where('id',$photos->album_id)->first()->album;

       $data = array(
           "id"=>$photos->id,
           "album_name"=>$album_name,
            "name"=>$photos->name,
            "date"=>$photos->date,
            "description"=>$photos->description,
            "path"=>$photos->path
       );

      
        
        // echo $photos->id;

        return view('admin/edit_form_single')->with('photos',$data);
    }


    public function update(Request $req, $id){

        $photos = Photos::find($id);

        $input = $req->all();

        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        

        $album = $input["album"];
        $name = $input["name_pic"];
        $date = $input["date"];
        $des = $input["des"];
        $category = $input["select_category"];

        Album::create([
            "album" => $album,
            "description" => ""
        ]);


        $album_id = DB::table('albums')->where('album',$album)->first()->id;
        $category_id = DB::table('categories')->where('category',$category)->first()->id;

        
        // $photos->path = $imageName;
        $photos->name = $name;
        $photos->date = $date;
        $photos->description = $des;
        $photos->album_id = $album_id;
        $photos->category_id = $category_id;

        if ($req->hasFile('image')){
            $file = $req->file('image');

            $imageName = time().'.'.$file->extension();  
        
            $req->image->move(public_path('uploads'), $imageName);

            $photos->path = $imageName;

        }

        $photos->save();

        $all_photo = Photos::all();


        return view('admin/image_page')->with('photos',$all_photo);
    }

}
