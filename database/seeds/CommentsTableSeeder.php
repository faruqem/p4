<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'faruqem@yahoo.com')->pluck('id')->first();
        DB::table('comments')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'I always rely on this report for net ticket sales.',
            'comment_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('comments')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'I scheduled it to run daily.',
            'comment_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'faruqem@yahoo.com')->pluck('id')->first();
        DB::table('comments')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'This post show report is used by both COC and NBoC.',
            'comment_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jamal@harvard.edu')->pluck('id')->first();
        DB::table('comments')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'This is a very useful report.',
            'comment_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Campaign Fund Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jamal@harvard.edu')->pluck('id')->first();
        DB::table('comments')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'This is a very useful report.',
            'comment_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Campaign Fund Summary')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('comments')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'This is my main go to report.',
            'comment_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);
    }
}
