<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    protected  $fillable = ['title', 'slug','date','description', 'published'];
//    public static function boot()
//    {
//        parent::boot();
//
//        static::saving(function ($model) {
//            $model->slug = str_slug($model->name);
//        });
//    }
    public function predictions () {
        return $this->hasMany('App\Prediction');
    }
    public function slug()
    {
        $slug = str_slug($this->title);
        $slug = explode('-', $slug);
        $stopWords = 'a, an, and, are, the'; // You can find long lists of stop-words online
        $keys = explode(', ', $stopWords);
        foreach ($slug as $k => $word) {
            foreach ($keys as $l => $wordfalse) {
                if ($word == $wordfalse) {
                    unset($slug[$k]);
                }
            }
        }
        return implode('-', $slug);
    }
    public function getUrlPath()
    {
        return Storage::url($this->page_thumbnail);
    }

}
