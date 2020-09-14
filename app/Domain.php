<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    //
    public function projects()
    {
    	return $this->belongsToMany(Project::class);
    }
    public function publication()
    {
        return $this->belongsToMany(Publication::class);
    }
    public function patents()
    {
    	return $this->belongsToMany(Patent::class);
    }
}
