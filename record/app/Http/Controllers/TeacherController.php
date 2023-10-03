<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Teacher::orderBy('id','Desc')->get();       
        return view('backend.pages.tech_index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.teacher_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          
        Teacher::create($request->all());
        // print_r($request);exit;
        return redirect()->route('teacher.list')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Teacher::where('id',$id)->first();
        

        return view('backend.pages.tech_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Teacher::where('id',$id)->first();

        return view('backend.pages.tech_edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Teacher::find($id);
       
        $user->update($request->all());
        // echo"<pre>"; print_r($user);exit;
        return redirect()->route('teacher.list')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Teacher::where('id',$id)->first();

        
        $user->delete();
    
                        

        return redirect()->route('teacher.list')
        ->with('success','Product deleted successfully');
    }
}
