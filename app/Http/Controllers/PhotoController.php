<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id)
    {
        return view('photos.create')->with('album_id',$album_id);
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
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required|image',
           ]);

           $photo= new Photo;
           $photo->album_id=$request->album_id;
           $photo->title=$request->title;
           //$photo->size=$request->file('photo')->getClientSize();
           $photo->description=$request->description;
           $photo->photo=$request->photo->store('images','public');
           //dd($request->all());
           $photo->save();
            //redirect
           session()->flash('success',('photo Added Succefully'));
           return redirect('/albums/'.$request->album_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo=Photo::find($id);
        return view('photos.show',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo=Photo::find($id);
        if ($photo->delete()){
            Storage::delete($photo->photo);
            Storage::disk('public')->delete($photo->photo);
            $photo->delete();
            //redirect
            session()->flash('success',('Photo Deleted Succefully'));
            return redirect('/albums/'.$photo->album_id);
        }

    }
}
