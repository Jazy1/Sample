<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $teacher = Teacher::where('email', $email)->first();

        if ($teacher) {
            if (password_verify($password, $teacher->password)) {
                session()->put(["LoggedTeacher" => $teacher->id]);

                return redirect()->route("teachers.dashboard");

            } else {
                return redirect()->back()->with("fail", "Password is not correct");
            }
        } else {
            return redirect()->back()->with("fail", "Email not Found");
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function create(Request $request)
    {
        $teacher_posts = new post;
        $teacher_posts->content = $request['content'];
        $teacher_posts->file = $request['file'];
        $teacher_posts->objects = $request['objects'];
        $teacher_posts->save();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new Teacher([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'phone' => $request->phone,
        ]);

        $teacher->save();

        return redirect()->route('public.home')->with([
            'success' => 'Teacher Registered successfully',
            'from' => 'signup',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}