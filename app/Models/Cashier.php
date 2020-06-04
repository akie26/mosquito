<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    protected $table = 'cashiers';
    //  Primary Key
    public $primaryKey = 'id';
    //  Timestamp
    public $timestamps = true;

    protected $fillable = [
        'name',
        'id'
    ];
}
