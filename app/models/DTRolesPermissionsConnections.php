<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTRolesPermissionsConnections extends Model
{
    use SoftDeletes;

    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_roles_permissions_connections';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['permissions_id', 'roles_id'];
}
