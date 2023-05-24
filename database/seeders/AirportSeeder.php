<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Airport;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airports = [
            ['name' => 'Salvador Bahia Airport', 'iata_code' => 'SSA', 'city_id' => 1],
            ['name' => 'Guarulhos International Airport', 'iata_code' => 'GRU', 'city_id' => 2],
            ['name' => 'Congonhas-São Paulo Airport', 'iata_code' => 'CGH', 'city_id' => 2],
            ['name' => 'Galeão International Airport', 'iata_code' => 'GIG', 'city_id' => 3],
            ['name' => 'Santos Dumont Airport', 'iata_code' => 'SDU', 'city_id' => 4],
            ['name' => 'Confins International Airport', 'iata_code' => 'CNF', 'city_id' => 4],
        ];

        foreach ($airports as $airport) {
            Airport::create($airport);
        }
    }
}
