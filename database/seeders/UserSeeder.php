<?php

namespace Database\Seeders;

use App\Models\Suka;
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
        User::create(['name' => 'Sanzhar Tolendy','email' => 'tolendy017@gmail.com']);

        User::create(['name' => 'Baiken Aktay','email' => 'aktay@gmail.com']);

        User::create(['name' => 'Ali Makhanbetov','email' => 'makhanbetov@gmail.com']);

        User::create(['name' => 'Dimash Abdimuratov','email' => 'dimash777@gmail.com']);

        User::create(['name' => 'Anastasiya Kim','email' => 'anastasiyakim@gmail.com']);
    }
}
