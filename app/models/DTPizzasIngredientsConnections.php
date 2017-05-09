<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTPizzasIngredientsConnections extends CoreModel
{
    protected $fillable = ['pizzas_id', 'ingredients_id'];

    protected $table = 'dt_pizzas_ingredients_connections';
}