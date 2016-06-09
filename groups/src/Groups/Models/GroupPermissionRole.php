<?php

namespace Dakala\Groups\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPermissionRole extends Model
{
    protected $table = "group_permission_role";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = array('group_permission_id', 'group_role_id');


    public function exists(GroupPermission $permission, GroupRole $role)
    {
        return count($this->where('group_permission_id', $permission->id)->where('group_role_id', $role->id)->get());
    }
}
