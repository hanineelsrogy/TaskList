<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "hey there!";
});
Route::get('/hanine', function () {
    return "hey hanine!";
});
Route::get('/hey/{name}', function ($name) {
    return "hey {$name}!";
});