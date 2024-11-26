<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Isolate;
use Livewire\Attributes\Validate;

#[Isolate]
class Search extends Component
{

    // #[Validate('required')]
    #[Url(as:'q',except:'')]
    public $searchText = '';
    // public $results = [];
    public $placeholder;


// public function updatedSearchText($value)
// {
//     $this->reset('results');

//     $this->validate();

//     $searchTerms = "%{$value}%";

//     $this->results = Article::where('title', 'like', $searchTerms)->get();
// }

#[On('search:clear-results')]
public function clear()
{
        $this->reset('searchText');
}

public function queryString()
{
    return [
        'searchText' => [
            'except' => '',
            'as' => 'q',
            'history' => true,
            ]    
        ];
}

    public function render()
    {
        return view('livewire.search',[
            'results'=>Article::where('title','Like',"%{$this->searchText}%")->get()
        ]);
    }
}
