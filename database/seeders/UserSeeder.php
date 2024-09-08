<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Иван Иванов', 'email' => 'ivan@example.com']);
        User::create(['name' => 'Петр Петров', 'email' => 'petr@example.com']);
        User::create(['name' => 'Мария Смирнова', 'email' => 'maria@example.com']);
    }
}
