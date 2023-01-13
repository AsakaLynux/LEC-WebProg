<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            [
                'username' => 'pinixxx',
                'email' => 'pinixsantosonidek@email.com',
                'password' => bcrypt('pinixsantosogntg123')
            ],
            [
                'username' => 'killjoy',
                'email' => 'killjoysusanti@email.com',
                'password' => bcrypt('killjoypropleyer123')
            ],


        ]);

        DB::table('users')->insert([
            [
                'username' => 'noval',
                'email' => 'noval@email.com',
                'password' => bcrypt('pengajar1'),
                'role' => 'pengajar',
                'category' => 'front',
            ],
            [
                'username' => 'livia',
                'email' => 'livia@email.com',
                'password' => bcrypt('pengajar2'),
                'role' => 'pengajar',
                'category' => 'back'
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'miqbltp',
                'email' => 'miqbltp@email.com',
                'password' => bcrypt('admin1'),
                'role' => 'admin',
            ],
            [
                'username' => 'andirozi',
                'email' => 'andirozi@email.com',
                'password' => bcrypt('admin2'),
                'role' => 'admin',
            ],
            [
                'username' => 'irfansyah',
                'email' => 'irfansyah@email.com',
                'password' => bcrypt('admin3'),
                'role' => 'admin',
            ]
        ]);
        $this->call([
            ContentSeeder::class,
            CourseSeeder::class,
            SuggestSeeder::class,
            CoursecontentSeeder::class,
            PengajarcourseSeeder::class
        ]);
    }
}
