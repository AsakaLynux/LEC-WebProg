<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengajar')->insert([
            [
                'username' => 'noval',
                'email' => 'noval@email.com',
                'password' => bcrypt('pengajar1'),
                'category' => 'front'
            ],
            [
                'username' => 'livia',
                'email' => 'livia@email.com',
                'password' => bcrypt('pengajar2'),
                'category' => 'back'
            ]
        ]);
    }
}
