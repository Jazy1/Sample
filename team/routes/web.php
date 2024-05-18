<?php

use Illuminate\Support\Facades\Route;

Route::get('/addquiz', function () {
    return view('teacher.addquiz');
});



Route::get('/teacher', function () {
    return view('teacher.content');
});
