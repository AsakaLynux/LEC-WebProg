<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'username' => 'miqbltp',
                'email' => 'miqbltp@email.com',
                'password' => bcrypt('admin1')
            ],
            [
                'username' => 'andirozi',
                'email' => 'andirozi@email.com',
                'password' => bcrypt('admin2')
            ],
            [
                'username' => 'irfansyah',
                'email' => 'irfansyaj@email.com',
                'password' => bcrypt('admin3')
            ]
        ]);
    }
}
