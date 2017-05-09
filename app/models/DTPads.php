<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTPads extends CoreModel
{
    use SoftDeletes;

    protected $table = 'dt_pads';

    protected $fillable = ['id', 'name', 'calories'];
}
