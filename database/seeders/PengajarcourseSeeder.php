<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajarcourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengajarcourse')->insert([
            [
                'pengajar_id' => 1,
                'course_id' => 1
            ],
            [
                'pengajar_id' => 1,
                'course_id' => 2
            ],
            [
                'pengajar_id' => 1,
                'course_id' => 3
            ],
            [
                'pengajar_id' => 2,
                'course_id' => 4
            ],
            [
                'pengajar_id' => 2,
                'course_id' => 5
            ],
            [
                'pengajar_id' => 2,
                'course_id' => 6
            ],
            [
                'pengajar_id' => 2,
                'course_id' => 7
            ],
        ]);
    }
}
