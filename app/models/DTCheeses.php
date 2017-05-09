<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTCheeses extends CoreModel
{


    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_cheeses';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
