<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
protected $fillable = [

'product_id' ,'product_name','type' ,'cost_price','sell_price','exp_date' ,'quantity' ,'invoice_id' , 'product_desc', 'supplier'

];
    protected $dates = ['deleted_at'];
    //
}
