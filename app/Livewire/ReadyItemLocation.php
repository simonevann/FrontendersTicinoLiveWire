<?php

namespace App\Livewire;

use Livewire\Component;

/**
 *
 */
class ReadyItemLocation extends Component
{
    /**
     * Location name
     * @var name
     */
    public $name;
    /**
     * Number of occurrance of a location
     * @var
     */
    public $occurrance;

    /**
     * Render the component
     * @return mixed
     */
    public function render()
    {
        return view('livewire.ready-item-location');
    }
}
