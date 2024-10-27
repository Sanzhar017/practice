<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create(['name' => 'Asyl Aset','description' => 'Компания по переводам.']);
        Company::create(['name' => 'KazMunayGas',
            'description' => 'Национальная нефтегазовая компания Республики Казахстан.',]);
        Company::create(['name' => 'Air Astana','description' => 'Aвиакомпания Казахстана.']);
        Company::create(['name' => 'BalTekstil','description' => 'Высокоэффективная ковровая фабрика международного уровня.']);
        Company::create(['name' => 'BI Group', 'description' => 'Крупнейший инвестиционно-строительный холдинг Казахстана.']);
        Company::create(['name' => 'Kazakhtelecom', 'description' => 'Казахстанская телекоммуникационная компания, имеющая статус национальной компании.']);
    }
}
