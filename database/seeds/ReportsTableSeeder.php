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

        DB::table('reports')->insert([
            'name' => 'Customer Service Issue Tracking',
            'description' => 'Customer Service issue listing with options for selecting by Category, Type, Rep, Open Issues Only, etc.',
            'tess_report_id' => 'csvisstr',
            'definition_file' => 'd_cust_svc_issue_tracking',
            'sql_proc' => 'rp_cust_service_issue_tracking',
            'primary_tables' => 't_cust_activity',
            'database' => 'impresario',
            'keywords' => 'CSI, Customer Service Issue',
            'notes_general' => 'Primarily used by Audience and Donor Services department to track and resolve customer service issue.',
            'notes_technical' => 'Additional data comes from t_issue_action, tr_action,tr_cust_activity_type, tr_cust_activity_category, tr_contact_type and tr_origin tables.',
            'category_id' => 4,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2008-10-23', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Income by Payment Method',
            'description' => 'Major Financial report listing all income for a range of dates.  Includes an option to limit income to what has been posted or to certain locations.',
            'tess_report_id' => 'Inc_by_Pmt',
            'definition_file' => 'w_inc_by_pmt_method',
            'sql_proc' => 'ap_income_by_pmt_method_2',
            'primary_tables' => 't_payment, tr_payment_method',
            'database' => 'impresario',
            'keywords' => 'Income, Payment Method, Finance, Accounting, GL',
            'notes_general' => 'Primarily used by Finance Department for reconciliation and other balance checking purpose. ',
            'notes_technical' => 'Additional data comes from t_transaction, t_fund, tr_payment_method, tr_bu, tr_desig_code, tr_account_type, t_batch, tr_batch_type, tr_batch_type_group, tx_machine_location_hist, tr_location and t_fee tables.',
            'category_id' => 9,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2008-10-23', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'New Contributions Report',
            'description' => 'Listing of all contributions to selected funds within a date range.  Primary Development Dept notification of daily activity.',
            'tess_report_id' => 'new_cont',
            'definition_file' => 'd_new_cont_report',
            'sql_proc' => 'ap_new_cont_report',
            'primary_tables' => 't_contribution',
            'database' => 'impresario',
            'keywords' => 'Contribution, Gift, Pledge, Daily Contribution, Donation, Fund',
            'notes_general' => 'Currently scheduled to run daily. Gives contribution detail by Fund, Constituent Type and selected List(s) within a transaction date range.',
            'notes_technical' => 'Additional data comes from t_transaction, t_customer, tr_cont_designation, tx_cust_membership, tx_cont_memb, tr_memb_trend, tx_cust_plan, t_ack_ext and t_format_info tables.',
            'category_id' => 7,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2008-10-23', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Ticketing Fee Revenue',
            'description' => 'Transaction based report showing total fee revenue for a given period.',
            'tess_report_id' => 'fee_revenue',
            'definition_file' => 'd_fee_revenue_report',
            'sql_proc' => 'rp_fee_revenue',
            'primary_tables' => 't_fee, t_order, tr_fee_category',
            'database' => 'impresario',
            'keywords' => 'Fee, Revenue, Total Fee, Fee Calculation, Handling Fee, CIF, CCF',
            'notes_general' => 'Primarily used by Finance department.',
            'notes_technical' => 'Additional data comes from tr_mos, tr_sales_channel, t_transaction, t_batch, tr_batch_type, t_campaign tables.',
            'category_id' => 9,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2008-10-23', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Ticket Sales by Period',
            'description' => 'Summary of ticket sales activity for a given period of time, categorized by MOS category or sales channel and sub-totaled by season, production, or week.',
            'tess_report_id' => 'ticket_sales_by_period',
            'definition_file' => 'd_ticket_sales_by_period',
            'sql_proc' => 'rp_ticket_sales_by_period',
            'primary_tables' => 't_order, t_sub_lineitem',
            'database' => 'impresario',
            'keywords' => 'Ticket Sales, Price Category, Sales Channel, MOS Category, Production, Season',
            'notes_general' => 'Primarily used by Finance department. Ticket counts come from order history and revenue figures come from transactions.',
            'notes_technical' => 'Additional data comes from t_order, t_transaction, t_perf_price_type, t_perf_price_layer, tr_price_layer_type,  tr_price_type and tr_price_type_category',
            'category_id' => 2,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2012-08-01', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Fund Activity Report',
            'description' => 'Fundraising report showing activity by Fund over a selected contribution or transaction date range.  Parameters for filtering include designation, appeal, campaign, list, and sales channel.  Output can be grouped by Fund, Payment, Campaign or Designation, optionally showing constituent detail.',
            'tess_report_id' => 'fund_act',
            'definition_file' => 'd_fund_activity',
            'sql_proc' => 'rp_fund_activity_report',
            'primary_tables' => 't_fund',
            'database' => 'impresario',
            'keywords' => 'Fund, Campaign, Gift, Pledge, Payment, Fund Activity',
            'notes_general' => 'Primarily used by Finance department.',
            'notes_technical' => 'Additional data comes from t_appeal, tr_cont_designation, t_contribution, t_transaction, t_campaign, t_batch, t_payment, tr_payment_method, t_creditee, tr_creditee and tr_sales_channel tables.',
            'category_id' => 9,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2011-01-24', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Event Listing',
            'description' => 'Produces a list of constituents (and guests) who are associated with a given event (campaign), event status, table number, event level(s) and list.',
            'tess_report_id' => 'event_list',
            'definition_file' => 'd_event_listing',
            'sql_proc' => 'rp_event_listing',
            'primary_tables' => 'tx_event_extract, tx_event_guest',
            'database' => 'impresario',
            'keywords' => 'Event, Guest, Table, Special Event, Recognition, Campaign',
            'notes_general' => 'Primarily used by Development department.',
            'notes_technical' => 'Additional data comes from tr_event_level, t_campaign and t_customer tables.',
            'category_id' => 7,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2012-08-01', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Transactions by Posting',
            'description' => 'For a posting number or a range of posting dates, this report details the transactions that affect each GL number.',
            'tess_report_id' => 'trn_by_post',
            'definition_file' => 'd_transactions_by_post',
            'sql_proc' => 'rp_transaction_by_gl',
            'primary_tables' => 't_transaction',
            'database' => 'impresario',
            'keywords' => 'Transaction, Posting, GL, Finance, Accounting',
            'notes_general' => 'Primarily used by Finance department.',
            'notes_technical' => 'Additional data comes from t_contribution, t_order, t_payment, t_perf_price_type, t_perf_price_layer, t_fee, t_fund, tr_payment_method, t_campaign, tr_transaction_type, vs_gl_ccount, t_batch, tr_batch_type, tr_batch_type_group and t_gl_account_hist tables.',
            'category_id' => 9,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2012-08-01', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Campaign Fund Summary',
            'description' => 'It gives contribution gift and pledge - due and received amount for a paricular campaign year, campaign(s), fund(s), list and transaction date range by campaign and fund (grouping) with campaign group total and grand total.',
            'tess_report_id' => 'lr_cmp_fnd_s',
            'definition_file' => 'ld_camp_fund_summ_otsl',
            'sql_proc' => 'lrp_camp_fund_summ_otsl',
            'primary_tables' => 't_transaction',
            'database' => 'impresario',
            'keywords' => 'Contribution, Gift, Pledge, Campaign, Fund',
            'notes_general' => 'Primarily used by Finance department.',
            'notes_technical' => 'This report brings all records from t_transaction, where the trn_dt is in the given date range and the funds associated are those specified in the input argument. Though the report stored procedure has the prefix LRP and original report description says created for NBC, apparently it is a canned report.  There is no mention of NBoC developer in the stored procedure comments.',
            'category_id' => 9,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2012-08-08', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'Campaign Fund Detail Report',
            'description' => 'It gives contribution gift and pledge - due and received amount for a paricular campaign year, campaign(s), fund(s), list and transaction date range by campaign and fund (grouping) with campaign group total and grand total.',
            'tess_report_id' => 'lr_cmp_fnd_d',
            'definition_file' => 'ld_camp_fund_detl_otsl',
            'sql_proc' => 'lrp_camp_fund_detl_otsl',
            'primary_tables' => 't_transaction, t_fund',
            'database' => 'impresario',
            'keywords' => 'Contribution, Gift, Pledge, Campaign, Fund',
            'notes_general' => 'Primarily used by Finance department.',
            'notes_technical' => 'Created based on ap_fund_activity_report SP. Other tables it pulls data from: t_contribution and t_campaign. Though the report stored procedure has the prefix LRP and original report description says created for NBC, apparently it is a canned report. There is no mention of NBoC developer in the stored procedure comments.',
            'category_id' => 9,
            'framework_id' => 3,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 0,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2004-01-01', //Report create date
            'last_update_dt'=>'2012-08-09', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'NBC Performance List by Season',
            'description' => 'To print the list of all Performances in a season to get the Perf No for setting up scanners.',
            'tess_report_id' => 'NBCPerfListByYear',
            'definition_file' => 'NBCPerfListByYear',
            'sql_proc' => 'lrp_nbc_perf_list_by_year',
            'primary_tables' => 't_perf, tr_season',
            'database' => 'impresario',
            'keywords' => 'Performance List, Perf No, Production, Season, Performance, Performance Date, Performance Time, Show Time',
            'notes_general' => 'Go to report if you are looking for performance no and list for a given season. Primarily used by Box office for scanner setup.',
            'notes_technical' => 'Additional tables it pulls data from: t_inventory and t_prod_season.',
            'category_id' => 2,
            'framework_id' => 2,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 1,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2008-01-01', //Report create date
            'last_update_dt'=>'2012-08-09', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'NBC Activity Attendance Status Report',
            'description' => 'Gives activity attendance status details.',
            'tess_report_id' => 'lr_nbc_stt_status',
            'definition_file' => 'NBCActivityAttendanceStatusReport',
            'sql_proc' => 'lrp_nbc_activity_attendance_status',
            'primary_tables' => 't_special_activity',
            'database' => 'impresario',
            'keywords' => 'Event, Activity, Activity Attendance, Special Event, Special Activity',
            'notes_general' => 'Primarily used by Development department.',
            'notes_technical' => 'Additional tables and views it pulls data from: t_customer, tr_special_activity_status, vrs_special_activity and vs_special_activity.',
            'category_id' => 7,
            'framework_id' => 2,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 1,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2007-08-16', //Report create date
            'last_update_dt'=>'2013-05-13', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('reports')->insert([
            'name' => 'NBC Section and Zone Selection by Price Type',
            'description' => 'Lists the zone selected by patrons for particular price type.',
            'tess_report_id' => 'ud_sect_zon_by_price_type_ssrs',
            'definition_file' => 'NBC Physical Section and Price Zone Selection by Price Type',
            'sql_proc' => 'lrp_nbc_section_price_zone_by_pricetype',
            'primary_tables' => 't_zone, tr_section',
            'database' => 'impresario',
            'keywords' => 'Physical Section, Price Zone, Price Type',
            'notes_general' => 'Primary used by Audience and Donor Service (ADS) department to find out a patrons seating preference based on price type, price zone and section.',
            'notes_technical' => 'Additional tables and views it pulls data from: t_sub_lineitem, t_order, t_perf, tr_price_type, t_prod_season, t_inventory, tr_season and t_seat.',
            'category_id' => 2,
            'framework_id' => 2,
            'type_id' => 2,
            'schedulable'=>1,
            'inhouse' => 1,
            'verified' => 1,
            'published' => 1,
            'first_implementation_dt'=>'2015-09-17', //Report create date
            'last_update_dt'=>'2015-09-17', //Report last update date
            'discontinued'=>0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);
    }
}
