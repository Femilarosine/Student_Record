<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentsController extends Controller
{

    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Student::orderBy('id','Desc')->get();       
        return view('backend.pages.stu_index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.student_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $input = $request->except('image', '_token');
                    
        $file = $request->image;

        $destination = "image";
        $value = $this->fileUpload($file, $destination);
        $input['image'] = $value;


        $user = new Student;
        $user->create($input);
        // print_r($user);exit;
        Session::flash('success', 'Your Student Added Successfully.');

        return redirect()->route('student.list');


         
        // Student::create($request->all());
        // // print_r($request);exit;
        // return redirect()->route('student.list')
        //                 ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Student::where('id',$id)->first();
        

        return view('backend.pages.stu_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Student::where('id',$id)->first();

        return view('backend.pages.stu_edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $input = $request->all();

        $input = $request->except('image', '_token');

        $file = $request->image;

        if ($file) {
            $destination = "image";
            $value = $this->fileUpload($file, $destination);
            $input['image'] = $value;

            $this->fileUnlink($request->image_old, $destination);
        } else {
            $input['image'] = $request->image_old;
        }

        $data = Student::where('id', $request->id)->first();
        $data->update($input);

        Session::flash('success', 'Your Student Updated Successfully.');

        return redirect()->route('student.list');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Student::where('id',$id)->first();

        
        $user->delete();
    
                        

        return redirect()->route('student.list')
        ->with('success','Student deleted successfully');
    }


   
}
