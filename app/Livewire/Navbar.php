<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $currentPage = '';

    public function mount($page = 'welcome')
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
