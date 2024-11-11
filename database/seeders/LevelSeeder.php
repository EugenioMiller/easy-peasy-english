<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Levels;

class LevelSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $lvl = new Levels();
        $lvl->type = 'Happy Starters';
        $lvl->save();

        $lvl = new Levels();
        $lvl->type = 'Cheerful Climbers';
        $lvl->save();

        $lvl = new Levels();
        $lvl->type = 'Joyful Explorers';
        $lvl->save();

        $lvl = new Levels();
        $lvl->type = 'Sunny Adventurers';
        $lvl->save();

        $lvl = new Levels();
        $lvl->type = 'Bright Builders';
        $lvl->save();

        $lvl = new Levels();
        $lvl->type = 'Shining Stars';
        $lvl->save();
    }
}
