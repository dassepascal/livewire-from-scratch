<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class Search extends Component
{

    #[Validate('required')]
    public $searchText = '';
    public $results = [];
    public $placeholder;


public function updatedSearchText($value)
{
    $this->reset('results');

    $this->validate();

    $searchTerms = "%{$value}%";

    $this->results = Article::where('title', 'like', $searchTerms)->get();
}

#[On('search:clear-results')]
public function clear()
{
        $this->reset('results','searchText');
}

    public function render()
    {
        return view('livewire.search');
    }
}
