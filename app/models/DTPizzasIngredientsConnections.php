<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTPizzasIngredientsConnections extends Model
{


    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_pizzas_ingredients_connections';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['pizzas_id', 'ingredients_id'];
}
