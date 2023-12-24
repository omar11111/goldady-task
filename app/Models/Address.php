<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model 
{

    protected $table = 'addresses';
    public $timestamps = true;
    protected $fillable = array('country', 'City', 'landmark');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}