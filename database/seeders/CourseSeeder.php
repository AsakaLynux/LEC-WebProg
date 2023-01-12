<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            [
                'title' => 'HTML',
                'subtitle' => 'The language for building web pages',
                'category' => 'front'
            ],
            [
                'title' => 'CSS',
                'subtitle' => 'The language for styling web pages',
                'category' => 'front'
            ],
            [
                'title' => 'JavaScript',
                'subtitle' => 'The language for programming web pages',
                'category' => 'front'
            ],
            [
                'title' => 'SQL',
                'subtitle' => 'A language for accessing databases',
                'category' => 'back'
            ],
            [
                'title' => 'PHP',
                'subtitle' => 'A web server programming language',
                'category' => 'back'
            ],
            [
                'title' => 'Python',
                'subtitle' => 'A popular programming language',
                'category' => 'back'
            ],
            [
                'title' => 'C++',
                'subtitle' => 'A programming language',
                'category' => 'back'
            ],
        ]);
    }
}
