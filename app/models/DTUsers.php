<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTUsers extends CoreModel
{
    use SoftDeletes;

    protected $table = 'dt_users';

    protected $fillable = ['id', 'name', 'password', 'phone', 'email'];
}
