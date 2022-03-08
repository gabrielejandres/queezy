<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'score',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function createUser($request){
        $this->username = $request->username;
        $this->save();
    }

    public function updateUser($request){
        if ($request->username) {
            $this->username = $request->username;
        }

        if ($request->score) {
            $this->score = $request->score;
        }

        $this->save();
    }
}
