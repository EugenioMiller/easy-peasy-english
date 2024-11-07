<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $course = new Course();
        $course->name = 'Curso 1';
        $course->description = 'Curso inicial para niños';
        $course->content = 'Introducción al inglés a través de juegos y actividades interactivas. Los niños aprenderán saludos, números, colores y vocabulario básico, ganando confianza para comunicarse en situaciones cotidianas.';
        $course->start = '2024-12-05';
        $course->end = '2024-12-21';
        $course->limit = 20;
        $course->price = 1000;
        $course->level_id = 1;
        $course->divition_id = 1;
        $course->save();
    }
}
