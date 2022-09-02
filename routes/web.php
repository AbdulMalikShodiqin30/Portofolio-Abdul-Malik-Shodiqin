<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Abdul Malik Shodiqin",
        "email" => "AMS@gmail.com",
        "image" => "Abdul.jpeg"
    ]);
});

$blog_posts = [
    [
        "title" => "MK Tolak Permohonan Legalisasi Ganja Medis!",
        "author By" => "Yolanda",
        "body" => "Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Veritatis ipsam rem iure 
        dolor soluta optio similique beatae ducimus 
        asperiores, quo nostrum autem perferendis tenetur? 
        Debitis esse voluptatem ab aliquid amet."

    ],
    [
        "title" => "MK Tolak Permohonan Legalisasi Ganja Medis!",
        "author By" => "Hilda",
        "body" => "Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Veritatis ipsam rem iure 
        dolor soluta optio similique beatae ducimus 
        asperiores, quo nostrum autem perferendis tenetur? 
        Debitis esse voluptatem ab aliquid amet."

    ],
];

Route::get('/blog', function () {
    return view('posts', [
        "title" => "blog",
    ]);
});
