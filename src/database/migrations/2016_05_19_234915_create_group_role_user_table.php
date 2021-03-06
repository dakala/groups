<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for associating group roles to users (Many-to-Many)
        Schema::create('group_role_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('group_role_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('group_role_id')->references('id')->on('group_roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'group_role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('group_role_user');
    }
}
