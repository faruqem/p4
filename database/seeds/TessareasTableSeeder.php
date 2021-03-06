<?php

use Illuminate\Database\Seeder;

class TessareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tessareas')->insert([
            'name' => '(None)',
            'description' => 'Not related to any application area.',
            'default' => 1,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Order',
            'description' => 'Single ticket and subscription orders.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Contribution',
            'description' => 'Gift and pledges.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Payment and Transaction',
            'description' => 'Payment and transaction details.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Constituents',
            'description' => 'Customer related data.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Package',
            'description' => 'Subscription details.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Production',
            'description' => 'Inventory and production details',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Facility',
            'description' => 'Venue related.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Access Control',
            'description' => 'Ticket scanning and show attendance.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Communication Management',
            'description' => 'Contact point, purpose and other details.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Event Management',
            'description' => 'Special events, gala and, other customer relationship and fund raising events.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Plan',
            'description' => 'Development plan related.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Telesales',
            'description' => 'Telesales area.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Artistic',
            'description' => 'Artistic and other related areas.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);

        DB::table('tessareas')->insert([
            'name' => 'Other',
            'description' => 'Any other area of the application.',
            'default' => 0,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
