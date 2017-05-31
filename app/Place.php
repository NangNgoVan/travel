<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Place extends Model
{
    //
    protected $fillable = [
        'place_map_id','title', 'description', 'address',
    ];

    public static function places() {
    	return DB::select('select * from places');
    }
}
