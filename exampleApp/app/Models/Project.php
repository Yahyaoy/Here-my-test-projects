<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){
        return $this->belongsTo(User::class); // select * from user where project where project_id = 1
    }

    use HasFactory;

// hasOne
// hasMany
// belongsTo
//belongsToMany
//morphMany
//morphToMany

}

