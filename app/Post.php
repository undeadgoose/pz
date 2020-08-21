<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key 
    public $primaryKey = 'id';
    // Timestamps 
    public $timestamps = true;

    use Sluggable;

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate'=> true
            ]
        ];
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
