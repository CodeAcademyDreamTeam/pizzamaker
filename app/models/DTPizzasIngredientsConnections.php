<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTPizzasIngredientsConnections extends Model
{
    use SoftDeletes;

    protected $table = 'dt_pizzas_ingredients_connections';

    protected $fillable = ['pizzas_id', 'ingredients_id'];
}
