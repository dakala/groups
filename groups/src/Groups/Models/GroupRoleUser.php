<?php

namespace Dajonems\Groups\Models;

use Illuminate\Database\Eloquent\Model;

class GroupRoleUser extends Model
{
    protected $table = "group_role_user";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = array('user_id', 'group_role_id');
}
