<?php

namespace App\models;


class DTPermissions extends CoreModel
{


    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_permissions';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
