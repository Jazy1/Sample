<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/addquiz', function () {
    return view('teacher.addquiz');
});

Route::get('/takequiz', function () {
    return view('student.takequiz');
});


// teachers route
Route::get('/teacher', function () {
    return view('teacher.content');
})->name('teachers.dashboard');

Route::get('/student', function () {
    return view('student.content');
});

Route::get('/create-classroom', function () {
    return view('teacher.classroom');
});

Route::get('/upload-posts', function () {
    return view('teacher.post');
});

// student route
Route::get('/Join-classroom', function () {
    return view('student.joinclassroom');
});

Route::get('/student-posts', function () {
    return view('student.posting');
});
Route::get("/", function(){
    return view("public.home");
})->name("public.home");

Route::prefix("teachers")->group(function(){
    Route::post('/', [TeacherController::class, "store"])->name("teachers.store");

    Route::middleware(["AlreadyLoggedTeacher"])->group(function(){
        Route::post('login', [TeacherController::class, "login"])->name("teachers.login");
    });
});
