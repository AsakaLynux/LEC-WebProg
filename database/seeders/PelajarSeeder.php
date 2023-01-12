<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelajar')->insert([
            [
                'username' => 'pinixxx',
                'email' => 'pinixsantosonidek@email.com',
                'password' => bcrypt('pinixsantosogntg123')
            ],
            [
                'username' => 'killjoy',
                'email' => 'killjoysusanti@email.com',
                'password' => bcrypt('killjoypropleyer123')
            ]
        ]);
    }
}
