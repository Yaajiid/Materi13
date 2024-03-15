<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.master');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('data-tables');
});

