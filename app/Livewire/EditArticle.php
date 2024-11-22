<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{
 
    public ArticleForm $form;

  
    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }
        

    public function save()
    {
        $this->form->update();

        $this->redirect('/dashboard/articles', navigate: true);
    }
    public function render()
    {
        return view('livewire.edit-article');
    }
}
