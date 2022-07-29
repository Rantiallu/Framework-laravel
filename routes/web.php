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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Bildad Ranti Allu",
        "email" => "ranthyallu@gmail.com"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
           "title" => "Judul Post Pertama",
           "slug" => "judul-post-pertama",
           "author" => "Ranti",
           "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, debitis, cum totam vitae ipsum recusandae itaque eum fugiat est eos enim ea? Qui, sapiente praesentium iste ut pariatur facilis veritatis deserunt veniam totam deleniti exercitationem excepturi velit vitae consequatur. Exercitationem similique, excepturi placeat dolores facilis reiciendis libero labore repellat! Exercitationem qui et autem, tempora maiores reiciendis fugit ullam quam maxime placeat ratione unde assumenda impedit commodi optio alias nisi adipisci harum minus natus amet totam facere. Tempore quibusdam et sequi."
        ],
        [
           "title" => "Judul Post Kedua",
           "slug" => "judul-post-kedua",
           "author" => "Ranti",
           "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, debitis, cum totam vitae ipsum recusandae itaque eum fugiat est eos enim ea? Qui, sapiente praesentium iste ut pariatur facilis veritatis deserunt veniam totam deleniti exercitationem excepturi velit vitae consequatur. Exercitationem similique, excepturi placeat dolores facilis reiciendis libero labore repellat! Exercitationem qui et autem, tempora maiores reiciendis fugit ullam quam maxime placeat ratione unde assumenda impedit commodi optio alias nisi adipisci harum minus natus amet totam facere. Tempore quibusdam et sequi."
        ],
       
    ];       
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});