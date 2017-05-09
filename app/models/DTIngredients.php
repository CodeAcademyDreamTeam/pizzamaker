<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTIngredients extends CoreModel
{
    use SoftDeletes;

    protected $table = 'dt_ingredients';

    protected $fillable = ['id', 'name', 'calories'];
}
