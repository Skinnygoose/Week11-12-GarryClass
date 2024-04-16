<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/courses', [
    'uses' => 'App/Http/Controllers/CourseController@index',
    'as' => 'courses.index'
]);
