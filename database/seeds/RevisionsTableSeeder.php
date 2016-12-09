<?php

use Illuminate\Database\Seeder;

class RevisionsTableSeeder extends Seeder
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
        DB::table('revisions')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'Added a section on top of the SP to automatically detect the current fiscal year for widget.',
            'revision_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'kshah@national.ballet.ca')->pluck('id')->first();
        DB::table('revisions')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'Updated the SP to add a new Mode of Sale (MOS).',
            'revision_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'faruqem@yahoo.com')->pluck('id')->first();
        DB::table('revisions')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'Added a new criteria in the parameter list in the report setup.',
            'revision_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('revisions')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'Chnaged an existing criteria in the parameter list in the report setup.',
            'revision_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Daily Sales Report New')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jamal@harvard.edu')->pluck('id')->first();
        DB::table('revisions')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'Updated the SP to sort on order no.',
            'revision_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'Campaign Fund Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('revisions')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'Changed an existing and added a new criteria in the parameter list in the report setup.',
            'revision_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);

        $report_id = DB::table('reports')->where('name', 'NBC Performance Attendance Detail Report')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jamal@harvard.edu')->pluck('id')->first();
        DB::table('revisions')->insert([
            'report_id' => $report_id,
            'user_id' => $user_id,
            'description' => 'Updated the SP to sort on performance no.',
            'revision_dt' => Carbon\Carbon::now()->toDateTimeString(),
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'deleted_at' => null
        ]);
    }
}
