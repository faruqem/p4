<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '(None)',
            'description' => 'Dummy category - just to be added as a default value when report category is not determind yet.',
            'default' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Ticketing Box Office',
            'description' => 'List container for all box office sales related reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Campaign and Appeal',
            'description' => 'List container for all Campaign and Appeal related reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Customer Service',
            'description' => 'List container for all Customer Service related reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'DCM',
            'description' => 'Special reports created for DCM related data pull jobs.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Data Management',
            'description' => 'List container for data update related utilities.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Development',
            'description' => 'Serves all Development department related reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Exception Reports',
            'description' => 'All accounting exception handling reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Finance',
            'description' => 'All accounting and finance related reports and utilities.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Miscellaneous',
            'description' => 'Miscellaneous reports that do not fit into other categories.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'NScan',
            'description' => 'All standard NScan access control reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Telesales',
            'description' => 'All telesales related reports and utilities.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Ticket Processing',
            'description' => 'All ticket processing related report.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Ticketing Subscription',
            'description' => 'All subscription related reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Ticketing Subscription',
            'description' => 'All subscription related reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Z-Bin Discarded Reports',
            'description' => 'All SSRS post conversion discarded InfoMaker reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
