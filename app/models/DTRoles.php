<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTRoles extends CoreModel
{
    protected $fillable = ['name'];

    protected $table = 'dt_roles';
}
