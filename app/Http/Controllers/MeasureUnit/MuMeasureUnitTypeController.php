<?php

namespace App\Http\Controllers\MeasureUnit;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\MeasureUnit\MuMeasureUnitType;

class MuMeasureUnitTypeController extends Controller
{
    public function get()
    {        
        return MuMeasureUnitType::select('id', 'description')
               ->get(); 
    }
}
