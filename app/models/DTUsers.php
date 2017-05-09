<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
