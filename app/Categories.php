<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name'];
    
    public function record() {
        return $this->hasMany('App\Records');
    }
}
