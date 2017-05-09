<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTRolesPermissionsConnections extends CoreModel
{
    protected $fillable = ['permissions_id', 'roles_id'];

    protected $table = 'dt_roles_permissions_connections';
}
