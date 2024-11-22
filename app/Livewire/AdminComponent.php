<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
// #[Title('Dashboard')]
class AdminComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
        // ->layout('components.layouts.admin');
    }
}
