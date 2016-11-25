<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FrameworksTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(GlossariesTableSeeder::class);
        $this->call(TessareasTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
    }
}
