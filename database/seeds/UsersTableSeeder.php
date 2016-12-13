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
            'password' => Hash::make('faruqe'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Jill',
            'email' => 'jill@harvard.edu',
            'password' => Hash::make('helloworld'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Jamal',
            'email' => 'jamal@harvard.edu',
            'password' => Hash::make('helloworld'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Jedi',
            'email' => 'jedi@harvard.edu',
            'password' => Hash::make('helloworld'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Kruti Shah',
            'email' => 'kshah@national.ballet.ca',
            'password' => Hash::make('kruti'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Ru Haque',
            'email' => 'rhaque@yahoo.com',
            'password' => Hash::make('rumana'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Andrew Anderson',
            'email' => 'aanderson@national.ballet.ca',
            'password' => Hash::make('andrew'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Chris Sonneman',
            'email' => 'csonneman@national.ballet.ca',
            'password' => Hash::make('chris'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Bethany Bleile',
            'email' => 'bbleile@national.ballet.ca',
            'password' => Hash::make('bethany'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Marielle Bryck',
            'email' => 'bbryck@national.ballet.ca',
            'password' => Hash::make('marielle'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Deanna Underwood',
            'email' => 'dunderwood@national.ballet.ca',
            'password' => Hash::make('deanna'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Steve Cunningham',
            'email' => 'scunningham@national.ballet.ca',
            'password' => Hash::make('steve'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Madeline Wong',
            'email' => 'mwong@national.ballet.ca',
            'password' => Hash::make('madeline'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Veronica McLellan',
            'email' => 'vmclellan@national.ballet.ca',
            'password' => Hash::make('veronica'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Demitrios Prevenas',
            'email' => 'dprevenas@national.ballet.ca',
            'password' => Hash::make('demitrios'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Belinda Bale',
            'email' => 'bbale@national.ballet.ca',
            'password' => Hash::make('belinda'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Amy McMullen',
            'email' => 'amcmullen@national.ballet.ca',
            'password' => Hash::make('amymac'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Keerthi Rajan',
            'email' => 'krajan@national.ballet.ca',
            'password' => Hash::make('keerthi'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Fernando Margueirat',
            'email' => 'fmargueirat@national.ballet.ca',
            'password' => Hash::make('fernando'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('users')->insert([
            'name' => 'Mohiuddin Faruqe',
            'email' => 'mfaruqe@national.ballet.ca',
            'password' => Hash::make('faruqe'),
            'remember_token' => null,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
