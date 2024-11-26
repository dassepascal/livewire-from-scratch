<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\ArticleForm;
use Illuminate\Support\Facades\Storage;

class EditArticle extends Component
{

    use WithFileUploads;
 
    public ArticleForm $form;

  
    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function downloadPhoto()
    {
        return response()->download(
            Storage::disk('public')->path($this->form->photo_path),
            name: 'article.png'
        );
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
