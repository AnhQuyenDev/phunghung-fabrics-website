<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/demo3D', function () {
    return view('demo3D');
});

Route::get('/design-selector', function () {
    return view('design-selector');
});

Route::get('/fabric-care', function () {
    return view('fabric-care');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/our-collections', function () {
    return view('our-collections');
});

Route::get('/outdura-fabrics', function () {
    return view('outdura-fabrics');
});

Route::get('/where-to-buy', function () {
    return view('where-to-buy');
});