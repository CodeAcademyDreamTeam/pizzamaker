<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DTUsersRolesConnections extends Model
{
    use SoftDeletes;

    protected $table = 'dt_users_roles_connections';

    protected $fillable = ['users_id', 'roles_id'];
}
