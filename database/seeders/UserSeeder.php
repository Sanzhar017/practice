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

        Suka::create(['name' => 'Санжар Толенды']);
    }
}
