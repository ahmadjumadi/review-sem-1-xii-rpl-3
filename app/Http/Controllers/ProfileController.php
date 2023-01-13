<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $title    = 'Profile';
    protected $subtitle = 'Halaman ini untuk mengelola data profil';
    public function index()
    {
        //
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'))
        ->with('title', $this->title)
        ->with('subtitle', $this->subtitle)
        ->with('content', 'List Data Profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create')
        ->with('title', $this->title)
        ->with('subtitle', $this->subtitle)
        ->with('content', 'Create Data Profile');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        Profile::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //  
        $profiles = Profile::find($profile->id);
        return view('profile.show', compact('profiles'))
        ->with('title', $this->title)
        ->with('subtitle', $this->subtitle)
        ->with('content', 'Detail Data Profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
        $profiles = Profile::find($profile->id);
        return view('profile.edit', compact('profiles'))
        ->with('title', $this->title)
        ->with('subtitle', $this->subtitle)
        ->with('content', 'Update Data Profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $profile = Profile::find($profile->id);
        $profile->nama     = $request->nama;
        $profile->alamat   = $request->alamat;
        $profile->update();

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
        $profiles = Profile::find($profile->id);
        $profiles->delete();
        return redirect('/profile');
    }
}
