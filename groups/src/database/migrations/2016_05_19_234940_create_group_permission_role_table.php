<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupPermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for associating group permissions to roles (Many-to-Many)
        Schema::create('group_permission_role', function (Blueprint $table) {
            $table->integer('group_permission_id')->unsigned();
            $table->integer('group_role_id')->unsigned();

            $table->foreign('group_permission_id')->references('id')->on('group_permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('group_role_id')->references('id')->on('group_roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['group_permission_id', 'group_role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('group_permission_role');
    }
}
