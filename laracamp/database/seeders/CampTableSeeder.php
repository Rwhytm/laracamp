<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps =
            [
                [
                    'title' => 'gila-belajar',
                    'slug' => 'gila-belajar',
                    'price' => 200,
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ],
                [
                    'title' => 'baru-mulai',
                    'slug' => 'baru-mulai',
                    'price' => 220,
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ],
            ];

        foreach ($camps as $key => $camps) {
            Camp::create($camps);
        }
    }
}
