<?php

namespace App\models;



class DTIngredients extends CoreModel
{


    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_ingredients';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
