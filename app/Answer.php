<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    protected $fillable = [
        'user_id', 'thread_id', 'content'
    ];
    public function thread() {
        return $this->belongsTo('App\Thread');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function likes() {
        return $this->hasMany('App\Likes' , 'thread_id');
    }
}
