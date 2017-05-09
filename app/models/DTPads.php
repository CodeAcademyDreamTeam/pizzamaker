<?php

namespace App\models;


class DTPads extends CoreModel
{

    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_pads';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
