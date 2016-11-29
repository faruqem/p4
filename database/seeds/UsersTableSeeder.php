<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mo Faruqe',
            'email' => 'faruqem@yahoo.com',
            'password' => 'faruqe',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Jill',
            'email' => 'jill@harvard.edu',
            'password' => 'helloworld',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Jamal',
            'email' => 'jamal@harvard.edu',
            'password' => 'helloworld',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Kruti Shah',
            'email' => 'kshah@national.ballet.ca',
            'password' => 'kruti',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Ru Haque',
            'email' => 'rhaque@yahoo.com',
            'password' => 'rumana',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Andrew Anderson',
            'email' => 'aanderson@national.ballet.ca',
            'password' => 'andrew',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Chris Sonneman',
            'email' => 'csonneman@national.ballet.ca',
            'password' => 'chris',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Bethany Bleile',
            'email' => 'bbleile@national.ballet.ca',
            'password' => 'bethany',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Marielle Bryck',
            'email' => 'bbryck@national.ballet.ca',
            'password' => 'marielle',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Deanna Underwood',
            'email' => 'dunderwood@national.ballet.ca',
            'password' => 'deanna',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Steve Cunningham',
            'email' => 'scunningham@national.ballet.ca',
            'password' => 'steve',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Madeline Wong',
            'email' => 'mwong@national.ballet.ca',
            'password' => 'madeline',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Veronica McLellan',
            'email' => 'vmclellan@national.ballet.ca',
            'password' => 'veronica',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Demitrios Prevenas',
            'email' => 'dprevenas@national.ballet.ca',
            'password' => 'demitrios',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Belinda Bale',
            'email' => 'bbale@national.ballet.ca',
            'password' => 'belinda',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Amy McMullen',
            'email' => 'amcmullen@national.ballet.ca',
            'password' => 'amymac',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Keerthi Rajan',
            'email' => 'krajan@national.ballet.ca',
            'password' => 'keerthi',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Fernando Margueirat',
            'email' => 'fmargueirat@national.ballet.ca',
            'password' => 'fernando',
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
