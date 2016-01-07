<?php

namespace random\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table ='company';

    public function companylocation()
    {
    	return $this->belongsTo('random\Models\CompanyLocation');
    }
    
}
