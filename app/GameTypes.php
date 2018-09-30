<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameTypes extends Model
{
    protected  $fillable = ['name'];


    public function predictions() {
        return $this->belongsTo('App\Prediction');
    }
}
