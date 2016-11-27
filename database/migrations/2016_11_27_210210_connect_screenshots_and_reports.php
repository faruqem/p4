<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectScreenshotsAndReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('screenshots', function (Blueprint $table) {

            # Add the foreign key column first
            $table->integer('report_id')->unsigned();

            # Then add the foreign key to create the relationship
            $table->foreign('report_id')->references('id')->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('screenshots', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            #Drop the foreign key first
            $table->dropForeign('screenshots_report_id_foreign');

            #Then drop the foreign key column
            $table->dropColumn('report_id');
        });
    }
}
