<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Locations;
use Livewire\Attributes\On;

class ReadyLocations extends Component
{
    public $locations = [];

    //#[On('locationAdded')]
    #[On('echo:locations,.NewLocationAdded')]
    public function refreshLocations()
    {
        $this->locations = [];
        $this->locations = Locations::getOccurance();
    }
    public function mount()
    {
        //getOccurance() é un metodo custom nel model Locations
        $this->locations = Locations::getOccurance();
    }
    public function render()
    {
        return view('livewire.ready-locations');
    }
}
