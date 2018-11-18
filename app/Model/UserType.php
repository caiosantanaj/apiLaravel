<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{

    protected $fillable = [
        'description'
    ];

    public function user() {
        return $this -> hasMany(User::class);
    }
}
