<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{   

    protected $table = 'products';
    //  Primary Key
    public $primaryKey = 'id';
    //  Timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
        return $this->belongsTo('App\Models\Cashier');
    }

    protected $fillable = [
        'name',
        'info',
        'barcode',
        'price',
        'quantity',
        'status'
    ];
}
