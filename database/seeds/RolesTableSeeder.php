<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => '(None)',
            'description' => 'Dummy entry - just to be added as a default value when role is yet unknown.',
            'default' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrators',
            'description' => 'Administrator with full access to do any kind of CRUD operations on any application object.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('roles')->insert([
            'name' => 'Power Users',
            'description' => 'Power users group generally to do CRUD operations on comments, ratings, glossaries etc.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('roles')->insert([
            'name' => 'Users',
            'description' => 'General users group who can olny view any report details.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
