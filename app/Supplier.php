<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
