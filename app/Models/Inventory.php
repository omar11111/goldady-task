<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model 
{

    protected $table = 'inventories';
    public $timestamps = true;
    protected $fillable = array('quantities');

    public function gold()
    {
        return $this->belongsTo('App\Models\Gold');
    }

}