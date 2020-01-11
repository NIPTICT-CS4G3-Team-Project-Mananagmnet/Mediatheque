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
        $profiles = User::find($id);

        return view('profile.edit', compact('profiles'));
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
    
          $profiles = User::find($id);
          $profiles->name = $request->get('name');
          $profiles->email = $request->get('email');
          $profiles->position = $request->get('position');

          if($request->hasFile('photo')){
            $profile_user = $request->file('photo');
            $fileName = '/img/profile_user/'.time().'.'.$profile_user->getClientOriginalExtension();
            Image::make($profile_user)->resize(150,150)->save(public_path($fileName));
            $profiles->photo=$fileName;
          }
          $profiles->save();
    
          return redirect('/profile')->with('success', 'Profile has been updated');
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
