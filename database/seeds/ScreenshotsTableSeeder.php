<?php

use Illuminate\Database\Seeder;

class ScreenshotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_daily_sales_report_new.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_performnace_attendance_detail_report.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Customer Service Issue Tracking')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'customer_service_issue_tracking.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Income by Payment Method')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'income_by_payment_method.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'New Contributions Report')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'new_contributions_report.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Ticketing Fee Revenue')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'ticket_fee_revenue.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Ticket Sales by Period')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'ticket_sales_by_period.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Fund Activity Report')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'fund_activity_report.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Event Listing')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'event_listing.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Transactions by Posting')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'transactions_by_posting.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Campaign Fund Summary')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'campaign_fund_summary_report.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Campaign Fund Detail Report')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'campaign_fund_detail_report.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance List by Season')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_performance_list_by_season.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Activity Attendance Status Report')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_activity_attendance_status_report.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Section and Zone Selection by Price Type')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_section_and_zone_selection_by_price_type.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing parameter values and partial output of the reports.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Corporate Offers')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'corporate_offers_custom_screen.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample screen entry.',
            'description' => 'Showing an instance of the screen.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Tax Receipt')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'tax_receipt_custom_screen.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing a sample screen output.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Interactive Seatmap')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'interactive_seat_map_widget.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing a particular instance of the widget.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_daily_sales_widget.jpg',
            'file_type' =>'JPEG',
            'caption' => 'A sample output.',
            'description' => 'Showing a particular instance of the widget.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Mass Update CSI Utility')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_mass_update_csi_utility.jpg',
            'file_type' =>'JPEG',
            'caption' => 'NBC Mass Update CSI Utility.',
            'description' => 'Showing parameter screen.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Void eTaxReceipt Utility - Gift')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'nbc_void_etaxreceipt_utility_gift.jpg',
            'file_type' =>'JPEG',
            'caption' => 'NBC Void eTaxReceipt Utility - Gift.',
            'description' => 'Showing parameter screen.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Telesales Custom App - Telesales Leads Pooling Screen')->pluck('id')->first();
        DB::table('screenshots')->insert([
            'report_id' => $report_id,
            'file_name' =>'telesales_leads_pooling_screen.jpg',
            'file_type' =>'JPEG',
            'caption' => 'Leads Pool Screen.',
            'description' => 'Partial view of leads pooling screen.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
