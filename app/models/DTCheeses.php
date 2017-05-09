<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTCheeses extends CoreModel
{
    protected $fillable = ['name', 'calories'];

    protected $table = 'dt_cheeses';
}
