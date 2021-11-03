<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
      //  return  $this->hasMany(Job::class, 'job_type_id', 'id');
    }
}
