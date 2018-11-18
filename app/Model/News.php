<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'news', 'resume', 'img_url', 'user_id', 'category_id'
    ];

    public function category() {
        return $this -> belongsToMany(Category::class);
    }

    public function reviews() {
        return $this -> hasMany(Review::class);
    }

    public function user() {
        return $this -> belongsTo(User::class);
    }
}
