<?php

use App\Livewire\Search;
use App\Livewire\Dashboard;
use App\Livewire\ArticleList;
use App\Livewire\ArticleIndex;
use App\Livewire\CreateArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class);

//Route::get('/search',Search::class)->name('search');
Route::get('/articles/{article}',\App\Livewire\ShowArticle::class)->name('show.article');

Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/articles', ArticleList::class);
Route::get('/dashboard/articles/create', CreateArticle::class);



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
