<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectReportsAndUsers extends Migration
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
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable(); 

            # Then add the foreign key to create the relationship
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
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
            $table->dropForeign('reports_created_by_foreign');
            $table->dropForeign('reports_updated_by_foreign');

            #Then drop the foreign key column
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');
        });
    }
}
