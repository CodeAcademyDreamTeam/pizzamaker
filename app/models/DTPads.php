<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTPads extends CoreModel
{
    protected $fillable= ['name', 'calories'];

    protected $table = 'dt_pads';
}
