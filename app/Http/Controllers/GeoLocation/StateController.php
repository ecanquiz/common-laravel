<?php

namespace App\Http\Controllers\GeoLocation;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\GeoLocation\State;

class StateController extends Controller
{
    public function get()
    {        
        $states = State::select('id', 'description')->get();
        return response($states, 200);               
    }
}
