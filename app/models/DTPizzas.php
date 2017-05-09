<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTPizzas extends CoreModel
{
    protected $fillable = ['pads_id', 'cheeses_id', 'user_id', 'name', 'calories', 'comment'];

    protected $table = 'dt_pizzas';
}