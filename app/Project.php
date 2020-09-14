<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
    public function domains()
    {
    	return $this->belongsToMany(Domain::class);
    }
    // public function company()
    // {
    // 	return $this->hasMany(Company::class);
    // }
}
