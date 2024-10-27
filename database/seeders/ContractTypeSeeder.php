<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\ContractType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ContractType::create(['name' => 'Договор купли-продажи']);
        ContractType::create(['name' => 'Договор аренды']);
        ContractType::create(['name' => 'Договор займа']);
        ContractType::create(['name' => 'Трудовой договор']);
        ContractType::create(['name' => 'Договор подряда']);
        ContractType::create(['name' => 'Договор об оказании услуг']);
        ContractType::create(['name' => 'Договор о совместной деятельности']);
        ContractType::create(['name' => 'Договор хранения']);
        ContractType::create(['name' => 'Договор кредитования']);
        ContractType::create(['name' => 'Лицензионный договор']);
    }
}
