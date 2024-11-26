<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateArticle extends AdminComponent
{
use WithFileUploads;

   public ArticleForm $form;

   public function save()
   {
    $this->form->store();
    session()->flash('status', 'Article created');

    // $this->redirectIntended(default: '/dashboard');

    $this->redirectRoute(name:'dashboard.articles.index');
   }
    public function render()
    {
        return view('livewire.create-article');
    }
}
