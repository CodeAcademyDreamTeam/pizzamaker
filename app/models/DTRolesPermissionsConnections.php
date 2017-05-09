<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTRolesPermissionsConnections extends Model
{
    use SoftDeletes;

    protected $table = 'dt_roles_permissions_connections';

    protected $fillable = ['permissions_id', 'roles_id'];
}
