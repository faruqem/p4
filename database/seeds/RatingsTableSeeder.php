<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
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
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 5,
            'favorite' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jamal@harvard.edu')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 4,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Ticket Sales by Period')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jamal@harvard.edu')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 5,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'faruqem@yahoo.com')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 5,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 5,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Income by Payment Method')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 4,
            'favorite' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Ticket Sales by Period')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => null,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);


        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'mfaruqe@national.ballet.ca')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 5,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Income by Payment Method')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'mfaruqe@national.ballet.ca')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 5,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Ticket Sales by Period')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'mfaruqe@national.ballet.ca')->pluck('id')->first();
        DB::table('ratings')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'rating' => 5,
            'favorite' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);
    }
}
