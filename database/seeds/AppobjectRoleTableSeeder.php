<?php

use Illuminate\Database\Seeder;

class AppobjectRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appobject_id = DB::table('appobjects')->where('name', 'Report')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Revision')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Comment')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Rating')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Glossary')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'User')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Password')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Role')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Category')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Type')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Framework')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Tessarea')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Screenshot')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        $appobject_id = DB::table('appobjects')->where('name', 'Appobject')->pluck('id')->first();
        $role_id = DB::table('roles')->where('name', 'Administrator')->pluck('id')->first();
        DB::table('appobject_role')->insert([
            'appobject_id' => $appobject_id,
            'role_id' => $role_id,
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
