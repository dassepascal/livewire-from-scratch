<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Articles')]
class ArticleIndex extends Component
{
    // public $articles=[];

    // public function mount()
    // {
    //     $this->articles = Article::all(); 
    // }

   
    public function render()
    {
        return view('livewire.article-index',[
            'articles' => Article::all()
        ]);
    }
}
