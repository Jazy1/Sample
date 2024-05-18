<?php

use Illuminate\Support\Facades\Route;

Route::get('/addquiz', function () {
    return view('abdullah1');
});



Route::get('/teacher', function () {
    return view('teacher.content');
});

Route::get('/create-classroom', function () {
    return view('teacher.classroom');
});

Route::get('/upload-posts', function () {
    return view('teacher.post');
});