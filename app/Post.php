<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'post_type',
        'description',
        'url',
        'file_attach',
        'location',
        'ratting',
        'post_tags',
        'user_id',

    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
