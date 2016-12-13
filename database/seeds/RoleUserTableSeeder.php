<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'faruqem@yahoo.com')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jill@harvard.edu')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'Power User')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jamal@harvard.edu')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'User')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'jedi@harvard.edu')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'Developer')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'kshah@national.ballet.ca')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'Developer')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'fmargueirat@national.ballet.ca')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'Developer')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'krajan@national.ballet.ca')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'Power User')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'bbale@national.ballet.ca')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'User')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'amcmullen@national.ballet.ca')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $role_id = DB::table('roles')->where('name', 'User')->pluck('id')->first();
        $user_id = DB::table('users')->where('email', 'rhaque@yahoo.com')->pluck('id')->first();
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
