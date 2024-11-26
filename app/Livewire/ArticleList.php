<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Illuminate\Contracts\View\View;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use withPagination;
    public $showOnlyTrashed = false;

    #[Computed/*(persist:true)*/]
    public function articles()
    {
        $query = Article::query();

        if ($this->showOnlyTrashed) {
            $query->where('published',1);
        }
        return  $query->paginate(10,pageName:'articles-page');
        
    }
    public function delete(Article $article): void
    {

        if($this->articles->count()<10){
            throw new \Exception('You must have at least 10 articles');
        }
        $article->delete();
        unset($this->articles);
        cache()->forget(key:'published-count');
    }


    public function showAll(): void
    {
        $this->showOnlyTrashed = false;
        $this->resetPage(pageName:'articles-page');
    }

    public function showPublished(): void
    {
        $this->showOnlyTrashed = true;
        $this->resetPage(pageName:'articles-page');
    }
    // public function render(): View
    // {

    //     $query = Article::query();

    //     if ($this->showOnlyTrashed) {
    //         $query->where ('published',1);
    //     }
    //     return view('livewire.article-list', [
    //         'articles' => $query->paginate(10,pageName:'articles-page'),
    //     ]);
    // }
}

