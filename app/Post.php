<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * Get the category.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');       
    }

    public function reviews() {
        return $this->hasMany('App\Review');
    }

}
