<?php

namespace App\Models\MeasureUnit;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Modules\Common\Entities\MeasureUnit\MuMeasureUnit;

class MuMeasureUnit extends Model
{
    use HasFactory;
    
    // protected $connection = 'pgsql_common';

    protected $fillable = [];
    
    protected static function newFactory()
    {
        // return \Database\factories\MuMeasureUnitFactory::new();
    }
}
