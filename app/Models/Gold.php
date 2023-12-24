<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{

    protected $table = 'gold';
    public $timestamps = true;
    protected $fillable = array('id','type', 'inventory_type', 'weight');

    public function inventories()
    {
        return $this->hasMany('App\Models\Inventory');
    }

    public function transactions()
    {
        return $this->belongsToMany('App\Models\Transaction');
    }

}
