<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations as Loc; 
use App\Events\NewLocationAdded;

class Locations extends Controller
{
    
    public function index(){
        return view('locations');
    }

    public function clear(){
        Loc::truncate();
        event(new NewLocationAdded('Clear'));
        return view('ready.locations');

    }

    public function ready(){
        return view('ready.locations');
    }
}
