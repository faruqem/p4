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
            'keywords' => 'Daily Sales, Order, Revenue',
            'notes_general' => 'Main sales report used by executives and communications department. Scheduled to auto run twice daily and mail a PDF copy to all recipients.',
            'notes_technical' => 'Primary sales data comes from T_ORDER, T_SUB_LINEITEM, T_SLI_DETAIL, TR_PRICE_CATEGORY, TR_MOS, and T_ORDER_SEAT_HIST. Same SP is also used for executive dashboard auto update sales report in which case current fiscal year is automatically determined.',
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
    }
}
