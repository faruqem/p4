<?php

use Illuminate\Database\Seeder;

class ReportTessareaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        $tessarea_id = DB::table('tessareas')->where('name', 'Order')->pluck('id')->first();
        DB::table('report_tessarea')->insert([
            'report_id' => $report_id,
            'tessarea_id' => $tessarea_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        $tessarea_id = DB::table('tessareas')->where('name', 'Package')->pluck('id')->first();
        DB::table('report_tessarea')->insert([
            'report_id' => $report_id,
            'tessarea_id' => $tessarea_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $tessarea_id = DB::table('tessareas')->where('name', 'Access Control')->pluck('id')->first();
        DB::table('report_tessarea')->insert([
            'report_id' => $report_id,
            'tessarea_id' => $tessarea_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $tessarea_id = DB::table('tessareas')->where('name', 'Facility')->pluck('id')->first();
        DB::table('report_tessarea')->insert([
            'report_id' => $report_id,
            'tessarea_id' => $tessarea_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
