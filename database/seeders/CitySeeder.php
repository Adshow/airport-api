<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Bahia', 'state' => 'BA'],
            ['name' => 'São Paulo', 'state' => 'SP'],
            ['name' => 'Rio de Janeiro', 'state' => 'RJ'],
            ['name' => 'Belo Horizonte', 'state' => 'MG'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
