<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTCheeses extends CoreModel
{
    use SoftDeletes;

    protected $table = 'dt_cheeses';

    protected $fillable = ['id', 'name', 'calories'];
}
