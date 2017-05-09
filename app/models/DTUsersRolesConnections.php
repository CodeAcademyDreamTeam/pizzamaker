<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTUsersRolesConnections extends CoreModel
{
    protected $fillable = ['users_id', 'roles_id'];

    protected $table = 'dt_users_roles_connections';
}
