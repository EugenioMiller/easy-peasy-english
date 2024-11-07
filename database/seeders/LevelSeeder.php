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
        $lvl->description = 'Happy Starters';
        $lvl->save();

        $lvl = new Levels();
        $lvl->description = 'Cheerful Climbers';
        $lvl->save();

        $lvl = new Levels();
        $lvl->description = 'Joyful Explorers';
        $lvl->save();

        $lvl = new Levels();
        $lvl->description = 'Sunny Adventurers';
        $lvl->save();

        $lvl = new Levels();
        $lvl->description = 'Bright Builders';
        $lvl->save();

        $lvl = new Levels();
        $lvl->description = 'Shining Stars';
        $lvl->save();
    }
}
