<?php

namespace App\Livewire;

use Livewire\Component;

class ReadyItemLocation extends Component
{
    public $name;
    public $occurance;
    public function render()
    {
        return view('livewire.ready-item-location');
    }
}
