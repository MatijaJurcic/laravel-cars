<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model 
{
    protected $fillable = [
        'title',
        'producer',
        'nubmer_of_dors'

    ];
}

?>