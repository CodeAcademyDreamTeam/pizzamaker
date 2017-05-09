<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTRoles extends CoreModel
{
    use SoftDeletes;

    protected $table = 'dt_roles';

    protected $fillable = ['id', 'name'];
}
