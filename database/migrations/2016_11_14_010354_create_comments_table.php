<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');

            # The main fact/data fields.
            $table->integer('report_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('comment_date');
            $table->string('comment');
            $table->boolean('active')->default(1); //Whether this category is still in use or not

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            $table->integer('created_by')->unsigned(); //Refers to users.user_id
            $table->integer('updated_by')->unsigned()->nullable(); //Refers to users.user_id

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
        Schema::drop('comments');
    }
}
