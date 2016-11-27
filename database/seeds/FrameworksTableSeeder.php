<?php

use Illuminate\Database\Seeder;

class FrameworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frameworks')->insert([
            'name' => '(None)',
            'description' => 'Dummy entry - just to be added as a default value when report framework is unknown.',
            'default' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('frameworks')->insert([
            'name' => 'SSRS',
            'description' => 'Microsoft SQL Server Reporting Services.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('frameworks')->insert([
            'name' => 'InfoMaker',
            'description' => 'Sybase InfoMaker reporting tools.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('frameworks')->insert([
            'name' => 'Dot NET',
            'description' => 'Microsoft ASP.NET Framework and .NET Core - MVC and Web Form.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('frameworks')->insert([
            'name' => 'Other',
            'description' => 'Anything other than MS .NET, InfoMaker or SSRS.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
