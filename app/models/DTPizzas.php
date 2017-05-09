<?php

namespace App\models;


class DTPizzas extends CoreModel
{


    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_pizzas';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'pads_id', 'cheeses_id', 'user_id', 'name', 'calories', 'comment'];
}
