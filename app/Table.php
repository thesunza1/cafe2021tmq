<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //
    protected $fillable = [
        'idStatus', 'addTable',
    ];
    public function status() {
        return $this->belongsTo('App\Status','idStatus','id');
    }
}
