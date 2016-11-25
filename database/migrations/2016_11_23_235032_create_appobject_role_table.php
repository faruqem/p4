<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppobjectRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appobject_role', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');

            # The main fact/data fields.
            $table->integer('object_id')->unsigned();
            $table->integer('role_id')->unsigned();

            #Object permission for the role
            $table->boolean('create')->default(1);
            $table->boolean('read')->default(1);
            $table->boolean('update')->default(0);
            $table->boolean('delete')->default(0);

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appobject_role');
    }
}
