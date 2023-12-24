<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model 
{

    protected $table = 'transactions';
    public $timestamps = true;
    protected $fillable = array('user_id');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function gold()
    {
        return $this->belongsToMany('App\Models\Gold');
    }

}