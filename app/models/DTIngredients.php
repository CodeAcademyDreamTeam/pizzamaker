<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTIngredients extends CoreModel
{
    protected $fillable = ['name', 'calories'];

    protected $table = 'dt_ingredients';
}
