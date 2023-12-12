<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Locations;
use App\Events\NewLocationAdded;

/**
 *
 */
class ReadyAddLocations extends Component
{
    /**
     * @var name
     */
    public $name;

    /**
     * Add a new locationd
     * @return void
     */
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

    /**
     * Render the component
     * @return mixed
     */
    public function render()
    {
        return view('livewire.ready-add-locations');
    }
}
