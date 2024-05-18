<?php

use Illuminate\Support\Facades\Route;

Route::get('/addquiz', function () {
    return view('teacher.abdullah1');
});



Route::get('/teacher', function () {
    return view('teacher.content');
});
