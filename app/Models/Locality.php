<?php

namespace random\Models;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
}

protected $table='locality';

    public function restaurant()
    {
    	return $this->belongsTo('random\Models\Restaurant');
    }


    public function city()
    {
    	return $this->hasOne('random\Models\Locality');
    }
}
