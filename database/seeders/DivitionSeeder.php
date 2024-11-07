<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Divitions;

class DivitionSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $dvt = new Divitions();
        $dvt->description = 'Kiddos (edades 6-12)';
        $dvt->save();
    }
}
