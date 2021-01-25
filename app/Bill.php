<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
    protected $fillable = ['name', 'delivery', 'through', 'status_bill', 'shipping_staff','status_bill'];
    public function warehouse ()
    {
        return $this->belongstoMany('App\Warehouse');
    }
}
