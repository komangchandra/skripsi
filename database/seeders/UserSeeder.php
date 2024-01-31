<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user' => 'Komang Chandra',
            'username' => 'Kochan',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'user' => 'Admin Ganteng',
            'username' => 'Admin',
            'password' => bcrypt('12345')
        ]);
    }
}
