<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

        'product_name','type' ,'cost_price','exp_date' ,'quantity' ,'invoice_id', 'supplier_name' , 'date' , 'user_id'
        
        ];
    
        protected $dates = ['deleted_at'];
}
