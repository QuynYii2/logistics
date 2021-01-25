<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    protected $table = 'warehouse';
    protected $fillable = ['name', 'name_manager', 'name_staff', 'id_user'];
    
    
}
