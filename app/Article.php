<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Table Name
    protected $table = 'articles';
    // Primary Key is changeable
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // Create a relationship with article to user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
