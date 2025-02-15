<?php

namespace App\Http\Controllers\MeasureUnit;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\MeasureUnit\MuMeasureUnit;

class MuMeasureUnitController extends Controller
{
    public function get(Request $request)
    {        
        return MuMeasureUnit::select('id', 'description')
               ->where('mu_measure_unit_types_id', $request->muMeasureUnitTypeId)
               ->get(); 
    }
}
