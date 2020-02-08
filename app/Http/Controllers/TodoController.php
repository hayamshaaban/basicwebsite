<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=Todo::orderBy('created_at','desc')->get();
        return view('todos.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
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
            'text'=>'required',
            'body'=>'required',
            'due'=>'required'
        ]);
        $todo= new Todo;
        $todo->text=$request->text;
        $todo->body=$request->body;
        $todo->due=$request->due;
       //save
        $todo->save();
        //redirect
        session()->flash('success',('Todo Added Succefully'));
        return redirect('todos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $todo=Todo::find($id);
       return view('todos.show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo=Todo::find($id);
        return view('todos.edit',compact('todo'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo=Todo::find($id);
        $todo->text=$request->text;
        $todo->body=$request->body;
        $todo->due=$request->due;
       //save
        $todo->update();
        //redirect
        session()->flash('success',('Todo Updated Succefully'));
        return redirect('todos');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo=Todo::find($id);
         //save
         $todo->delete();
         //redirect
         session()->flash('success',('Todo Deleted Succefully'));
         return redirect('todos');
    }
}
