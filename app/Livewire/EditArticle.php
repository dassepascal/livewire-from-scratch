<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class EditArticle extends Component
{

    use WithFileUploads;
 
    public ArticleForm $form;

  
    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }
        

    public function save()
    {
        $this->form->update();

        session()->flash('status', 'Article updated');

        $this->redirect(url: ArticleList::class, navigate: true);
    }
    public function render()
    {
        return view('livewire.edit-article');
    }
}
