<?php

namespace App\Livewire\Atoms;

use App\Livewire\ForwardsAttributes;
use Livewire\Attributes\On;
use Livewire\Component;

class Button extends Component
{
    use ForwardsAttributes;

    public $type = 'button';
    public $content = null;
    public $content_attrs = [];

    #[On('mount')]
    public function mount($value = null, array $attrs = [])
    {
        $this->value = $value;
        $this->mapAttributes($attrs);
    }

    public function render()
    {
        return view('livewire.atoms.button');
    }
}