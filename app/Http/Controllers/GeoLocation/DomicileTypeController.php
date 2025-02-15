<?php

namespace App\Http\Controllers\GeoLocation;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\GeoLocation\DomicileType;

class DomicileTypeController extends Controller
{
    public function get()
    {        
        return DomicileType::select('id', 'description')
               ->get(); 
    }
}
