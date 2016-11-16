<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'name' => 'NBC Daily Sales Report New',
            'description' => 'Modified version of NBC Daily Sales Report that shows the result set in a browser based SSRS window It keeps the other features as they are such as it excludes the conversion column, includes only ticket price, and shows production name in subtotal row.',
            'tess_report_id' => 'NBCDailySalesReportNewWithMOSG',
            'definition_file' => 'NBCDailySalesReportNewWithMOSGrandTotal',
            'sql_proc' => 'lrp_nbc_daily_sales_ssrs',
            'primary_tables' => 't_order, t_sub_lineitem',
            'database' => 'impresario',
            'keywords' => 'Daily Sales, Order, Revenue',
            'notes_general' => 'Shows net amount. Main sales report used by executives and communications department. Scheduled to auto run twice daily and mail a PDF copy to all recipients.',
            'notes_technical' => 'Primary sales data comes from t_order, t_sub_lineitem, t_sli_detail, tr_price_category, tr_mos, and t_order_seat_hist. Same SP is also used for executive dashboard auto update sales report in which case current fiscal year is automatically determined.',
            'category_id' => 2,
            'framework_id' => 2,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 1,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2012-09-26', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'NBC Performance Attendance Detail Report',
            'description' => 'It gives the detail break up of ticket scanning - by scanner and by different time slots before and immediately after the show starts.',
            'tess_report_id' => 'ld_perf_attendance_detail',
            'definition_file' => 'ud_nbc_perf_attendance_detail',
            'sql_proc' => 'lrp_nbc_access_control_detail_statistics_with_unscannables',
            'primary_tables' => 't_nscan_event_control',
            'database' => 'impresario',
            'keywords' => 'Attendance, Scan, N-Scan, Post Show Report',
            'notes_general' => 'Currently it is scheduled for all post show attendance reporting.',
            'notes_technical' => 'It mainly pulls data from t_nscan_event_control table.',
            'category_id' => 2,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 1,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2007-11-01', //Report create date
            'last_update_dt'=>'2015-11-05', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);
    }
}
