<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTPermissions extends CoreModel
{
    protected $fillable = ['name'];

    protected $table = 'dt_permissions';
}