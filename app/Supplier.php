<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [

        'supplier_id' ,'supplier_name','address' ,'city','postal_code','tel_no' ,'product_id' ,'email'
        
        ];
        

    protected $dates = ['deleted_at'];
}
