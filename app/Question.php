<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed body
 * @property mixed id
 */
class Question extends Model
{
    protected $fillable = ['body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
