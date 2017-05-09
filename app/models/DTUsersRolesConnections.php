<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class DTUsersRolesConnections extends Model
{

    protected $updated_at = false;

    /**
     * Table name in database
     * @var string
     */
    protected $table = 'dt_users_roles_connections';

    /**
     * Fields in database which will be manipulated
     * @var array
     */
    protected $fillable = ['users_id', 'roles_id'];
}
