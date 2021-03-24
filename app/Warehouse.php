<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warehouse extends Model
{
    //
    protected $fillable = [
        'toName','inquantity','price','totalIn',
    ];
}
