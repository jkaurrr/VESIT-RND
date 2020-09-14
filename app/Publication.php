<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function domain()
    {
        return $this->belongsToMany(Domain::class);
    }
}
