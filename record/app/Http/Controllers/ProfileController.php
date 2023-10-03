<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Profile::find(1); // Replace 1 with the actual user ID or logic to retrieve the user
        return view('backend.pages.stu_view', ['user' => $user]);
    }

    public function showStudentProfiles()
{
    $count = Profile::all(); // Fetch all student profiles
    $studentCount = $count->count(); // Count the number of student profiles

    return view('backend.pages.admin_count', compact('count', 'studentCount'));
}
}
