<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTPizzas extends CoreModel
{
    use SoftDeletes;

    protected $table = 'dt_pizzas';

    protected $fillable = ['id', 'pads_id', 'cheeses_id', 'user_id', 'name', 'calories', 'comment'];
}
