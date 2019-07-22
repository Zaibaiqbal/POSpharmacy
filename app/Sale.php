<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

protected $fillable = [

        'product_id' ,'product_name', 'trans_date' , 'transaction_id', 'sell_price' , 'quantity' , 'subtotal' 
        
    ];

    protected $dates = ['deleted_at'];
}
