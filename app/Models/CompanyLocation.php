<?php

namespace random\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyLocation extends Model
{
    protected $table ='companylocation';

    public function company()
    {
    	return $this->hasMany('random\Models\Company');
    }
}
