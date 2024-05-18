<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/addquiz', function () {
    return view('abdullah1');
});



Route::get('/teacher', function () {
    return view('teacher.content');
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