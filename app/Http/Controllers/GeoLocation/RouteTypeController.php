<?php

namespace App\Http\Controllers\GeoLocation;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\GeoLocation\RouteType;

class RouteTypeController extends Controller
{
    public function get()
    {        
        return RouteType::select('id', 'description')
               ->get(); 
    }
}
