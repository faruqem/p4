<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTessareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_tessarea', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');

            # The main fact/data fields.
            $table->integer('report_id')->unsigned();
            $table->integer('tessarea_id')->unsigned();

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
        Schema::drop('report_tessarea');
    }
}
