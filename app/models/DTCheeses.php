<?php

namespace App\models;


class DTCheeses extends CoreModel
{


    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_cheeses';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
