<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'news_id', 'review', 'rate'
    ];

    public function news() {
        return $this -> belongsTo(News::class);
    }

    public function user() {
        return $this -> belongsTo(User::class);
    }
}
