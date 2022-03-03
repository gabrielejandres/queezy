<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    public function countries()
    {
        return $this->hasMany('App\Models\Country');
    }

    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }
}
