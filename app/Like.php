<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = [
        'user_id', 'thread_id', 'like'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
    public function answer()
    {
        return $this->belongsTo('App\Answer' , 'thread_id');
    }
}
