<?php

use Illuminate\Database\Seeder;

class GlossariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('glossaries')->insert([
            'term' => 'New Customer',
            'definition' => 'A new customer is anyone who, individually or as part of a household, bought ticket (single ticket or subscription) in the current year but never before in the last ten years.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('glossaries')->insert([
            'term' => 'New Subscriber',
            'definition' => 'A new subscriber is anyone who, individually or as part of a household, bought a subscription (flex or fixed seat) in the current year but never before in the last ten years.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('glossaries')->insert([
            'term' => 'Loyal Customer',
            'definition' => 'A customer who, individually or as part of a household, bought ticket (single ticket or subscription) for ten or more years in the last fifteen years.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('glossaries')->insert([
            'term' => 'Renewal Subscription',
            'definition' => 'If a customer, individually or as part of a household, subscribed two or more years consecutively including current year, their subscription will be considered a renewal subscription.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('glossaries')->insert([
            'term' => 'New Subscription',
            'definition' => 'Any subscriber, as an individual or as part of a household, who did not meet the criteria of a renewal susbcription will be considered a new susbcriber and their subscription will be considered New Subscription.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('glossaries')->insert([
            'term' => 'Donor',
            'definition' => 'A donor is anyone who made a donation of at least $100 or more in the last five years.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('glossaries')->insert([
            'term' => 'Current Donor',
            'definition' => 'A current donor is anyone who made a pledge or gift of $100 or more in the current fiscal year.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);

        DB::table('glossaries')->insert([
            'term' => 'Current Season',
            'definition' => 'Current season is the currently running season that falls between July 1 of one year to the June 30 of the next year. For example seating in between July 01, 2016 and June 30, 2017: season 2016-2017 will be considered the current season.',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => null,
            'created_by' => 1,
            'updated_by' => null
        ]);
    }
}
