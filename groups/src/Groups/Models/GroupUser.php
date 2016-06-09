<?php

namespace Dajonems\Groups\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $table = "group_user";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = array('user_id', 'group_id');
}
