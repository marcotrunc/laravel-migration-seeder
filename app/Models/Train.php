<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable =  [
        'brand_name',
        'departure',
        'arrival',
        'departure_time',
        'arrival_time',
        'code_train',
        'num_cariages',
        'is_ontime',
        'is_deleted'
    ];
}
