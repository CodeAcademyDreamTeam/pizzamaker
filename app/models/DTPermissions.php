<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTPermissions extends CoreModel
{
    use SoftDeletes;

    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_permissions';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
