<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdminSeeder::class,
            ContentSeeder::class,
            CourseSeeder::class,
            PelajarSeeder::class,
            PengajarSeeder::class,
            SuggestSeeder::class,
            CoursecontentSeeder::class,
            PengajarcourseSeeder::class
        ]);
    }
}
