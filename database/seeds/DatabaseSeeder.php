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
        $this->call(CategoriesTableSeeder::class);
        $this->call(FrameworksTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(GlossariesTableSeeder::class);
        $this->call(TessareasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AppobjectsTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(ScreenshotsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(RevisionsTableSeeder::class);
        $this->call(ReportTessareaTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
    }
}
