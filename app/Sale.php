<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
