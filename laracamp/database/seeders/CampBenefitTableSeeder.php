<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campbenefit = [
            ['camp_id' => '1', 'name' => 'benefit 1'],
            ['camp_id' => '1', 'name' => 'benefit 2'],
            ['camp_id' => '2', 'name' => 'benefit 1'],
        ];

        CampBenefit::insert($campbenefit);
    }
}
