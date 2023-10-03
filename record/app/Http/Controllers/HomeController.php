<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user_type = Auth::user()->user_type;
       switch ($user_type) {
        case 'student':
            return redirect()->route('student.dashboard');
            break;
        

            case 'teacher':
                return redirect()->route('teacher.dashboard');
                break;

                case 'admin':
                    return redirect()->route('admin.dashboard');
                    break;
        default:
            # code...
            break;
       }
    }

    public function studentIndex(){
        return view('backend.layouts.main');
    }

    public function teacherIndex(){
        return view('backend.layouts.main');
    }

    public function adminIndex(){
        return view('backend.layouts.main');
    }
}
