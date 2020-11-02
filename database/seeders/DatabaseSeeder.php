<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'jonathan',
            'email' => 'jonathan_1308@hotmail.com',
            'password' => Hash::make('jony,.123')
        ]);
    }
}
