<?php

namespace App\Livewire\Molecules;

use Livewire\Component;

class SearchForm extends Component
{
    public $searchTerm = '';

    public function render()
    {
        return view('livewire.molecules.search-form');
    }

    public function search()
    {
        
    }
}
