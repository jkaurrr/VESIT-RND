<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FundedProject extends Model
{
    //
    public function company()
    {
    	return $this->hasMany(Company::class);
    }
}
