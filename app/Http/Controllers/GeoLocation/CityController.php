<?php

namespace App\Http\Controllers\GeoLocation;

use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\GeoLocation\City;
use App\Models\GeoLocation\Municipality;

class CityController extends Controller
{
    public function get(Request $request)
    {            
      $citiId = Municipality::select('city_id')
          ->find( $request->municipalityId )
          ->city_id;

      return City::select('id', 'description')
          ->where('id', $citiId)
          ->get();
     
    }    
}
