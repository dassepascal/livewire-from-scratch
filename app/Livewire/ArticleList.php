<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use withPagination;
    public $showOnlyTrashed = false;

    public function delete(Article $article): void
    {
        $article->delete();
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
    public function render(): View
    {

        $query = Article::query();

        if ($this->showOnlyTrashed) {
            $query->where ('published',1);
        }
        return view('livewire.article-list', [
            'articles' => $query->paginate(10,pageName:'articles-page'),
        ]);
    }
}

