<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeoLocation\{
    StateController,
    MunicipalityController,
    ParishController,
    CityController,
    ZoneTypeController,
    RouteTypeController,
    DomicileTypeController,
    GeoLocationController
};
use App\Http\Controllers\MeasureUnit\{
  MuContainerController,
  MuMeasureUnitTypeController,
  MuMeasureUnitController
};

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/




Route::group(['prefix' => 'common'], function() {
    Route::group(['prefix' => 'measure-unit'], function() {
      Route::get('containers', [MuContainerController::class, 'get']);      
      Route::get('type', [MuMeasureUnitTypeController::class, 'get']);
      Route::get('/{muMeasureUnitTypeId}',  [MuMeasureUnitController::class, 'get']);  
   });

   Route::group(['prefix' => 'geo-location'], function() {
    Route::get('state', [StateController::class, 'get']);
    Route::get('municipality/{stateId}', [MunicipalityController::class, 'get']);
    Route::get('parish/{municipalityId}', [ParishController::class, 'get']);
    Route::get('city/{municipalityId}', [CityController::class, 'get']);
    Route::get('zone-type', [ZoneTypeController::class, 'get']);
    Route::get('route-type', [RouteTypeController::class, 'get']);
    Route::get('domicile-type', [DomicileTypeController::class, 'get']);
    Route::get('{ids}', [GeoLocationController::class, 'get']);    
  });
});
