<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $user = new User();
        $user->name = 'Margarita';
        $user->surname = 'Alemán';
        $user->email = 'easypeasy_educ@gmail.com';
        $user->password = bcrypt('maguita');
        $user->phone = '+522282558077';
        $user->is_admin = true;
        $user->save();
    }
}
