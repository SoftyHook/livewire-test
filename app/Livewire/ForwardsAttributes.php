<?php

namespace App\Livewire;

use Livewire\Attributes\On;

trait ForwardsAttributes
{
    public $forwardedAttributes;

    /* #[On('mount')]
    public function mount(...$attrs)
    {
        $this->mapAttributes(...$attrs);
    } */

    public function mapAttributes(array $attrs = [])
    {
        $this->forwardedAttributes = collect($attrs)
            ->map(function ($value, $key) {
                if (is_array($value)) {
                    $value = json_encode($value);
                } elseif (is_bool($value)) {
                    $value = $value ? 'true' : 'false';
                }

                return sprintf('%s="%s"', $key, e($value));
            })
            ->implode(' ');
        
        // echo "<script>console.log('Mapped Attribute:', " . $forwardedAttributes . ");</script>";
    }
}
