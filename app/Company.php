<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Company extends Model
{
    public function industrialproject()
    {
        return $this->belongsTo(Project::class);
    }
    public function fundedproject()
    {
        return $this->belongsTo(FundedProject::class);
    }
}
