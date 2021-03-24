<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    // protected $fillable =[
    //     'idDrink','quantity','totalPrice',
    // ];
    protected $guarded= [];
    public function drink() {
        return $this->belongsTo('App\Drink','idDrink','id');
    }
}
