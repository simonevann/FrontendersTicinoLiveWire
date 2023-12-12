<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Locations;
use Livewire\Attributes\On;

/**
 *
 */
class ReadyLocations extends Component
{
    /**
     * List of location
     * @var array
     */
    public $locations = [];

    //#[On('locationAdded')]

    /**
     * On broadcast event, reload the list of location
     * @return void
     */
    #[On('echo:locations,.NewLocationAdded')]
    public function refreshLocations()
    {
        $this->locations = [];
        $this->locations = Locations::getOccurance();
    }

    /**
     * Mout the data
     * @return void
     */
    public function mount()
    {
        //getOccurance() é un metodo custom nel model Locations
        $this->locations = Locations::getOccurance();
    }

    /**
     * Redenr the component
     * @return mixed
     */
    public function render()
    {
        return view('livewire.ready-locations');
    }
}
