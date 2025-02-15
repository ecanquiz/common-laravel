<?php

namespace App\Http\Controllers\MeasureUnit;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\MeasureUnit\MuContainer;

class MuContainerController extends Controller
{
    public function get()
    {        
        return MuContainer::select('id', 'description')
               ->get(); 
    }
}


