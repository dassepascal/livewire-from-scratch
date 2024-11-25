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

    public function delete(Article $article): void
    {
        $article->delete();
    }

    public function render(): View
    {
        return view('livewire.article-list', [
            'articles' => Article::paginate(10),
        ]);
    }
}

