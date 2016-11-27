<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');

            # The main fact/data fields.
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('tess_report_id')->nullable(); //Not a foreign key, a descriptive tessitura report id
            $table->string('definition_file')->nullable();
            $table->text('sql_proc');
            $table->string('database')->default("impresario");
            $table->string('keywords')->nullable();
            $table->text('note_general')->nullable();
            $table->text('note_technical')->nullable();
            //$table->integer('category_id')->unsigned();
            //$table->integer('framework_id')->unsigned();
            //$table->integer('type_id')->unsigned();
            $table->boolean('schedulable');
            $table->boolean('inhouse')->default(1);
            $table->boolean('verified')->default(1);
            $table->boolean('published')->default(1);
            $table->date('first_implementation_dt')->nullable(); //Report first create date
            $table->date('last_update_dt')->nullable(); //Report last update date
            $table->boolean('discontinued')->default(0);
            $table->boolean('active')->default(1); //Whether this category is still in use or not

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            //$table->integer('created_by')->unsigned(); //Refers to users.user_id
            //$table->integer('updated_by')->unsigned()->nullable(); //Refers to users.user_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reports');
    }
}
