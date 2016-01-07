<?php

namespace random\Models;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{

    protected $table='city';

    public function restaurant()
    {
    	return $this->belongsTo('random\Models\Restaurant');
    }


    public function locality()
    {
    	return $this->belongsTo('random\Models\Locality');
    }
}

