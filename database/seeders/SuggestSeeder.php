<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suggest')->insert([
            [
                'name' => 'stepen',
                'suggest' => 'Seharusnya pada materi HTML pertama......'
            ]
        ]);
    }
}
