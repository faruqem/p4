<?php

use Illuminate\Database\Seeder;

class AppobjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appobjects')->insert([
            'name' => '(None)',
            'description' => 'Dummy entry - just to be added as a default value when app object is yet unknown.',
            'default' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Report',
            'description' => 'Main aplication object i.e. a report, custom screen, utility or widget.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Revision',
            'description' => 'Revision history of a report, custom screen, utility or widget.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Comment',
            'description' => 'User comment of a report, custom screen, utility or widget.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Rating',
            'description' => 'User rating of a report, custom screen, utility or widget.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Glossary',
            'description' => 'A glossary item.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'User',
            'description' => 'User of the application.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Password',
            'description' => 'A user password.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Role',
            'description' => 'A user security role.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Category',
            'description' => 'Report category reference object.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Type',
            'description' => 'Report type reference object.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Framework',
            'description' => 'Report framework reference object.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Tessarea',
            'description' => 'Tessitura application area.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Screenshot',
            'description' => 'Report screenshot reference object.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('appobjects')->insert([
            'name' => 'Appobject',
            'description' => 'Any application object.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
