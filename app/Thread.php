<?php

namespace App;
use App\Like;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Thread extends Model
{
    use Searchable;
    protected $fillable = [
        'author', 'title', 'content', 'photo' , 'best_answer'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function likes() {
        return $this->hasMany('App\Like');
    }
    public function answers() {
        return $this->hasMany('App\Answer');
    }
    public function best_answer() {
        return $this->hasOne('App\Answer' , 'best_answer');
    }

}
