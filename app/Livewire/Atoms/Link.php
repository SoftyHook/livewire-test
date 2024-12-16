<?php

namespace App\Livewire\Atoms;

use App\Livewire\ForwardsAttributes;
use Livewire\Attributes\On;
use Livewire\Component;

class Link extends Component
{
    use ForwardsAttributes;
    
    public $text = 'Click me';
    public $href = '/';

    #[On('mount')]
    public function mount($value = null, array $attrs = [])
    {
        $this->value = $value;
        $this->mapAttributes($attrs);
    }

    public function render()
    {
        return view('livewire.atoms.link');
    }
}
