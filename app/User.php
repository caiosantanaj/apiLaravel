<?php

namespace App;

use App\Model\News;
use App\Model\Review;
use App\Model\UserType;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userType() {
        return $this -> belongsTo(UserType::class);
    }

    public function reviews() {
        return $this -> hasMany(Review::class);
    }

    public function news() {
        return $this -> hasMany(News::class);
    }
}
