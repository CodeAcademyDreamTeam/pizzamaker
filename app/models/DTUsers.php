<?php

namespace App\models;


class DTUsers extends CoreModel
{


    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_users';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'password', 'phone', 'email'];
}
