<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmaker extends Model
{
    protected $fillable = [
        'name',
    ];

    public function predictions () {
        return $this->hasMany('App\Prediction');
    }
}
