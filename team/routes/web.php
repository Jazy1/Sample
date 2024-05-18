<?php

use Illuminate\Support\Facades\Route;

Route::get('/addquiz', function () {
    return view('teacher.addquiz');
});

Route::get('/takequiz', function () {
    return view('student.takequiz');
});



Route::get('/teacher', function () {
    return view('teacher.content');
});
