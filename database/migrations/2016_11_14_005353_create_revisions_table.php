<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');

            # The main fact/data fields.
            //$table->integer('report_id')->unsigned();
            //$table->integer('user_id')->unsigned();
            $table->string('description');
            $table->dateTime('revision_dt');
            $table->boolean('active')->default(1); //Whether this category is still in use or not

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            #Adds nullable deleted_at column for soft deletes.
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('revisions');
    }
}
