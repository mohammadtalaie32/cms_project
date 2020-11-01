<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Page extends Model
{
    use Searchable;


    public $timestamps = false;
    protected $fillable = [
        'name' , 'content' , 'parent_id' , 'is_root'
    ];



}
