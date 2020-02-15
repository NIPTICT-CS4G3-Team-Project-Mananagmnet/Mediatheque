<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profiles = User::all();
        // $healthies = Healthy::paginate(3);

         return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
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
        $user = User::find($id);

        return view('profile.edit', compact('user'));
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
        $request->validate([
            'name'=>'',
            'email'=> '',
            'position'=> '',
            'photo'=> '',
    
          ]);
    
          $user = User::find($id);
          $user->name = $request->get('name');
          $user->email = $request->get('email');
          $user->position = $request->get('position');

          if($request->hasFile('photo')){
            $file = $request->file('photo');
            $imageName = time().'.'.$file->extension();
            $request->photo->move(public_path('uploads'), $imageName);
            $user->photo=$imageName;
          }
          
          $user->save();
    
          return redirect('/admin/layout');
        // return view('admin/layout');
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

    public function submit_image(Request $request, $id)
    {
        $request->validate([
            'submmit_image'=> '',
    
        ]);

        $user = User::find($id);
        
        if($request->hasFile('submit_image')){
            $file = $request->file('submit_image');
            $imageName = time().'.'.$file->extension();
            $request->submit_image->move(public_path('uploads'), $imageName);
            $user->photo=$imageName;
            
        }
          
        $user->save();

        return back();
    }
}
