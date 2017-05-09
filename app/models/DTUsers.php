<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTUsers extends CoreModel
{
    protected $fillable= ['name', 'password', 'phone', 'email'];

    protected $table = 'dt_users';
}
