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
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'Ticketing Box Office',
            'description' => 'List container for all box office sales related reports.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'created_by' => 1,
            'updated_by' => null
        ]);
    }
}
