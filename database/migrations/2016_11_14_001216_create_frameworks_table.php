<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');

            # The main fact/data fields.
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('default')->default(0); //Should the category be default for a report row
            $table->boolean('active')->default(1); //Whether this category is still in use or not

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            $table->integer('created_by')->unsigned(); //Refers to users.user_id
            $table->integer('updated_by')->unsigned()->nullable(); //Refers to users.user_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('frameworks');
    }
}