<?php


return [

    'model_property' => 'group_audience',

    'models' => [
//        App\Models\Users\User::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Group Model
    |--------------------------------------------------------------------------
    |
    | This is the model used by Group to create correct relations.  Update
    | if it is in a different namespace.
    |
    */
    'group' => 'Dajonems\Groups\Models\Group',

    /*
    |--------------------------------------------------------------------------
    | Group Table
    |--------------------------------------------------------------------------
    |
    | This is the groups table used to save groups to the database.
    |
    */
    'groups_table' => 'groups',

    /*
    |--------------------------------------------------------------------------
    | Group Role Model
    |--------------------------------------------------------------------------
    |
    | This is the Role model used by Group to create correct relations.  Update
    | the role if it is in a different namespace.
    |
    */
    'group_role' => 'Dajonems\Groups\Models\GroupRole',

    /*
    |--------------------------------------------------------------------------
    | Group Roles Table
    |--------------------------------------------------------------------------
    |
    | This is the roles table used by Group to save roles to the database.
    |
    */
    'group_roles_table' => 'group_roles',

    /*
    |--------------------------------------------------------------------------
    | Group Permission Model
    |--------------------------------------------------------------------------
    |
    | This is the Permission model used by Group to create correct relations.
    | Update the permission if it is in a different namespace.
    |
    */
    'group_permission' => 'Dajonems\Groups\Models\GroupPermission',

    /*
    |--------------------------------------------------------------------------
    | Group Permissions Table
    |--------------------------------------------------------------------------
    |
    | This is the permissions table used by Group to save permissions to the
    | database.
    |
    */
    'group_permissions_table' => 'group_permissions',

    /*
    |--------------------------------------------------------------------------
    | Group permission_role Table
    |--------------------------------------------------------------------------
    |
    | This is the permission_role table used by Group to save relationship
    | between permissions and roles to the database.
    |
    */
    'group_permission_role_table' => 'group_permission_role',

    /*
    |--------------------------------------------------------------------------
    | Group role_user Table
    |--------------------------------------------------------------------------
    |
    | This is the role_user table used by Group to save assigned roles to the
    | database.
    |
    */
    'group_role_user_table' => 'group_role_user',

    /*
    |--------------------------------------------------------------------------
    | User Foreign key on Group's group_role_user Table (Pivot)
    |--------------------------------------------------------------------------
    */
    'group_user_foreign_key' => 'user_id',

    /*
    |--------------------------------------------------------------------------
    | Role Foreign key on Group's group_role_user Table (Pivot)
    |--------------------------------------------------------------------------
    */
    'group_role_foreign_key' => 'role_id',
];
