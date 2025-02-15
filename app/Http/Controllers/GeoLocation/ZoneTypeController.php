<?php

namespace App\Http\Controllers\GeoLocation;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\GeoLocation\ZoneType;

class ZoneTypeController extends Controller
{
    public function get()
    {        
        return ZoneType::select('id', 'description')
               ->get(); 
    }
}
