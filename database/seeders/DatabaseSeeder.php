<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $contractTypes = [
            ['name' => 'Sales Agreement'],
            ['name' => 'Service Agreement'],
            ['name' => 'Rental Agreement'],
            ['name' => 'Partnership Agreement'],
        ];

        foreach ($contractTypes as $type) {
            ContractType::create($type);
        }
    }

    }
}
