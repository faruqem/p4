<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectReportsAndFrameworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {

            # Add the foreign key column first
            $table->integer('framework_id')->unsigned();

            # Then add the foreign key to create the relationship
            $table->foreign('framework_id')->references('id')->on('frameworks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            #Drop the foreign key first
            $table->dropForeign('reports_framework_id_foreign');

            #Then drop the foreign key column
            $table->dropColumn('framework_id');
        });
    }
}
