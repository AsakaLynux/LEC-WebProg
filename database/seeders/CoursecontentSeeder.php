<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursecontentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coursecontent')->insert([
            [
                'course_id' => 1,
                'content_id' => 1
            ],
            [
                'course_id' => 1,
                'content_id' => 2
            ],
            [
                'course_id' => 1,
                'content_id' => 3
            ],
            [
                'course_id' => 1,
                'content_id' => 4
            ],
            [
                'course_id' => 1,
                'content_id' => 5
            ],
            [
                'course_id' => 4,
                'content_id' => 6
            ],
            [
                'course_id' => 4,
                'content_id' => 7
            ],
            [
                'course_id' => 4,
                'content_id' => 8
            ],
            [
                'course_id' => 4,
                'content_id' => 9
            ],
            [
                'course_id' => 4,
                'content_id' => 10
            ]
        ]);
    }
}
