<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public $timestamps = false;

    // Multivalued attribute
    public function countries()
    {
        return $this->hasMany('App\Models\Country');
    }

    // Heritage
    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }

    public function series()
    {
        return $this->hasMany('App\Models\Series');
    }

    // Many to many relationships
    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre');
    }

    public function directors()
    {
        return $this->belongsToMany('App\Models\Director');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Models\Actor');
    }

    public function platforms()
    {
        return $this->belongsToMany('App\Models\Platform')->withPivot('inclusion_date');
    }
}
