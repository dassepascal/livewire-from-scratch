<?php

use App\Livewire\Search;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search',Search::class)->name('search');
Route::get('/articles/{article}',\App\Livewire\ShowArticle::class)->name('show.article');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
