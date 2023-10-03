<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class StudentController extends Controller
{
    public function about(){
       
        return view('frontend.pages.about');
    }


    public function contact(){
       
        return view('frontend.pages.contact');
    }


    public function portimage(){
       
        return view('frontend.pages.portimage');
    }



    public function we(){
       
        return view('frontend.pages.we');
    }

    
    public function subpage(){
       
        return view('frontend.pages.subpage');
    }


    public function view(){
       
        return view('backend.pages.stu_view');
    }

    
    public function form(){
       
        return view('backend.pages.student_form');
    }

    public function show($id)
    {
    
        $user = User::find($id);
        
        return view('backend.pages.stu_view',['user'=>$user]);
    }

}
