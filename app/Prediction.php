<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{

    protected  $fillable = ['first_team', 'second_team', 'type', 'description', 'event_start'];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function gameType() {
        return $this->belongsTo('App\GameTypes');
    }
    public function bookmaker() {
        return $this->belongsTo('App\Bookmaker');
    }
    public function page() {
        return $this->belongsTo('App\Page');
    }
}
