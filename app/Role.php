<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
}
