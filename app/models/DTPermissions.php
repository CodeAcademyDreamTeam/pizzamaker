<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTPermissions extends CoreModel
{
    use SoftDeletes;

    protected $table = 'dt_permissions';

    protected $fillable = ['id', 'name'];
}
