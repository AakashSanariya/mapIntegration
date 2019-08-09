<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $table = "maps";
    protected $fillable = ['addressName', 'latitude', 'longitude', 'startDate', 'endDate'];
    
    public static function insertDetails($request){
        $mapInsert = Map::create($request);
        return $mapInsert;
    }
}
