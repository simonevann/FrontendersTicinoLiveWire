<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Locations;
use App\Events\NewLocationAdded;

class ReadyAddLocations extends Component
{
    public $name;

    public function addLocation()
    {
        $validated = $this->validate([
            'name' => 'required|min:3'
        ]);

        $newLocation = Locations::create($validated);

        //$this->dispatch( 'locationAdded', $newLocation->id);
        event(new NewLocationAdded( $validated['name']));

        $this->name = "";
        session()->flash('message', 'Location successfully created.');
    }
    public function render()
    {
        return view('livewire.ready-add-locations');
    }
}
